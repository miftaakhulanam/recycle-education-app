<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kategori.index', [
            'kategori' => Kategori::paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|unique:kategoris',
            'slug' => 'required|unique:kategoris',
            'gambar' => 'required|image|file|max:1024'
        ]);



        $validatedData['gambar'] = $request->file('gambar')->store('kategori-images');

        Kategori::create($validatedData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('dashboard.kategori.show', [
            "kategori" => Kategori::where('slug', $slug)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        return view('dashboard.kategori.edit', [
            'kategori' => Kategori::where('slug', $slug)->firstOrFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();

        if ($request->nama != $kategori->nama) {
            $rules['nama'] = 'required|max:255|unique:kategoris';
        }

        if ($request->slug != $kategori->slug) {
            $rules['slug'] = 'required|unique:kategoris';
        }

        $rules = [
            'gambar' => 'required|image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['gambar'] = $request->file('gambar')->store('kategori-images');

        Kategori::where('slug', $slug)
            ->update($validatedData);

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();

        if ($kategori->gambar) {
            Storage::delete($kategori->gambar);
        }

        Kategori::where('slug', $slug)->delete();

        return redirect('/dashboard/kategori')->with('success', 'Kategori berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kategori::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
