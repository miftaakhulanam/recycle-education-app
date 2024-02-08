<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Modul;
use App\Models\Materi;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'kelas' => Kelas::paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kelas.create', [
            'kategori' => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:kelas',
            'kategori_id' => 'required',
            'harga' => 'required',
            'waktu_pengerjaan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:1024'
        ]);

        // , '...'
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);
        $validatedData['kuis'] = $request->slug;
        $validatedData['jml_pelanggan'] = 0;
        $validatedData['gambar'] = $request->file('gambar')->store('kelas-images');

        $kelas = Kelas::create($validatedData);

        $validatedModul = [
            'kelas_id' => $kelas->id,
            'nama' => $request->judul,
            'slug' => $request->slug,
        ];

        $modul = Modul::create($validatedModul);

        $validatedMateri = $request->validate([
            'judul1' => 'required|max:255',
            'materi1' => 'required',
            'judul2' => 'required|max:255',
            'materi2' => 'required',
            'judul3' => 'required|max:255',
            'materi3' => 'required'
        ]);


        $materiData = [];

        for ($i = 1; $i <= 3; $i++) {
            $judulKey = "judul{$i}";
            $materiKey = "materi{$i}";

            $materiData[] = [
                'modul_id' => $modul->id,
                'nama' => $validatedMateri[$judulKey],
                'page' => $i,
                'body' => $validatedMateri[$materiKey]
            ];
        }

        Materi::insert($materiData);



        $validatedPertanyaan = $request->validate([
            'soal1' => 'required',
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required',
            'soal5' => 'required',
            'soal6' => 'required',
            'soal7' => 'required',
            'soal8' => 'required',
        ]);

        $dataPertanyaan = [];
        foreach ($validatedPertanyaan as $key => $soal) {
            if (strpos($key, 'soal') === 0) {
                $dataPertanyaan[] = ['pertanyaan' => $soal, 'modul_id' => $modul->id];
            }
        }

        Pertanyaan::insert($dataPertanyaan);


        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->file('file')->storeAs('public/uploads', $filenametostore);

            // you can save image path below in database
            $path = asset('storage/uploads/' . $filenametostore);

            echo $path;
            exit;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $modul = Modul::where('slug', $slug)->firstOrFail();

        return view('dashboard.kelas.show', [
            "kelas" => Kelas::where('slug', $slug)->firstOrFail(),
            "materis" => Materi::where('modul_id', $modul->id)->get(),
            "pertanyaans" => Pertanyaan::where('modul_id', $modul->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas, $slug)
    {
        $modul = Modul::where('slug', $slug)->firstOrFail();

        $materis = Materi::where('modul_id', $modul->id)->get();

        $pertanyaans = Pertanyaan::where('modul_id', $modul->id)->get();

        return view('dashboard.kelas.edit', [
            'kelas' => Kelas::where('slug', $slug)->firstOrFail(),
            'kategori' => Kategori::all(),
            'modul' => $modul,
            'materis' => $materis,
            'pertanyaans' => $pertanyaans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $kelasdb = Kelas::where('slug', $slug)->firstOrFail();
        $moduldb = Modul::where('slug', $slug)->firstOrFail();

        $rules = [
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'harga' => 'required',
            'waktu_pengerjaan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:1024'
        ];

        if ($request->slug != $kelasdb->slug) {
            $rules['slug'] = 'required|unique:kelas';
        }

        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 13);
        $validatedData['kuis'] = $request->slug;
        $validatedData['jml_pelanggan'] = 0;

        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['gambar'] = $request->file('gambar')->store('kelas-images');

        $kelasdb->update($validatedData);

        $validatedModul = [
            'kelas_id' => $kelasdb->id,
            'nama' => $request->judul,
            'slug' => $request->slug,
        ];

        $moduldb->update($validatedModul);

        // $validatedMateri = $request->validate([
        //     'judul1' => 'required|max:255',
        //     'materi1' => 'required',
        //     'judul2' => 'required|max:255',
        //     'materi2' => 'required',
        //     'judul3' => 'required|max:255',
        //     'materi3' => 'required'
        // ]);


        // $materiData = [];
        // foreach ($validatedMateri as $key => $materi) {
        //     if (strpos($key, 'judul') === 0) {
        //         $index = substr($key, 5); // Ambil angka dari 'judul1', 'judul2', dll.
        //         $materiKey = "materi{$index}";

        //         $materiData[] = [
        //             'modul_id' => $moduldb->id,
        //             'nama' => $materi,
        //             'page' => $index,
        //             'body' => $materi
        //         ];
        //     }
        // }

        // Materi::where('modul_id', $moduldb->id)->delete();
        // Materi::insert($materiData);


        $materiRules = [
            'judul1' => 'required|max:255',
            'materi1' => 'required',
            'judul2' => 'required|max:255',
            'materi2' => 'required',
            'judul3' => 'required|max:255',
            'materi3' => 'required'
            // Tambahkan sesuai kebutuhan
        ];

        $validatedMateriData = $request->validate($materiRules);

        // Update data materi
        $materiData = [];
        foreach ($validatedMateriData as $key => $materi) {
            if (strpos($key, 'judul') === 0) {
                $index = substr($key, 5); // Ambil angka dari 'judul1', 'judul2', dll.
                $materiKey = "materi{$index}";

                $materiData[] = [
                    'modul_id' => $moduldb->id,
                    'nama' => $materi,
                    'page' => $index,
                    'body' => $request->$materiKey
                ];
            }
        }

        Materi::where('modul_id', $moduldb->id)->delete();
        Materi::insert($materiData);



        $validatedPertanyaan = $request->validate([
            'soal1' => 'required',
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required',
            'soal5' => 'required',
            'soal6' => 'required',
            'soal7' => 'required',
            'soal8' => 'required',
        ]);

        $dataPertanyaan = [];
        foreach ($validatedPertanyaan as $key => $soal) {
            if (strpos($key, 'soal') === 0) {
                $dataPertanyaan[] = ['pertanyaan' => $soal, 'modul_id' => $moduldb->id];
            }
        }

        Pertanyaan::where('modul_id', $moduldb->id)->delete();
        Pertanyaan::insert($dataPertanyaan);


        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $kelas = Kelas::where('slug', $slug)->first();

        if (!$kelas) {
            return redirect('/dashboard/kelas')->with('error', 'Kelas tidak ditemukan!');
        }

        $modul = Modul::where('kelas_id', $kelas->id)->first();

        if ($modul) {
            Pertanyaan::where('modul_id', $modul->id)->delete();

            Materi::where('modul_id', $modul->id)->delete();

            $modul->delete();
        }

        if ($kelas->gambar) {
            Storage::delete($kelas->gambar);
        }

        $kelas->delete();

        return redirect('/dashboard/kelas')->with('success', 'Kelas berhasil dihapus!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kelas::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
