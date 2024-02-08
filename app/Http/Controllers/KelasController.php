<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';

use PDF;
// use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Pelatihan;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
// use Illuminate\Support\Facades\Cache;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        $pelatihan = null;

        if (auth()->user()) {
            $user = User::where('username', auth()->user()->username)->firstOrFail();
            $pelatihan = Pelatihan::where('user_id', $user->id)
                ->where('kelas_id', $kelas->id)
                ->first(); // Gunakan first() tanpa fail
        }

        $formattedUpdatedAt = null;

        if ($pelatihan) {
            $formattedUpdatedAt = Carbon::parse($pelatihan->updated_at)->format('d F Y');
        }

        return view('kelas', [
            "kelas" => $kelas,
            "pelatihan" => $pelatihan,
            "formattedUpdatedAt" => $formattedUpdatedAt,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }

    // public function cetakSertif($kelas)
    // {
    //     $kelas = Kelas::findOrFail($kelas);

    //     if (auth()->user()) {
    //         $user = User::where('username', auth()->user()->username)->firstOrFail();
    //         $pelatihan = Pelatihan::where('user_id', $user->id)
    //             ->where('kelas_id', $kelas->id)
    //             ->first(); // Gunakan first() tanpa fail
    //         // $pelatihan = Cache::remember('pelatihan_' . $user->id . '_' . $kelas->id, now()->addMinutes(30), function () use ($user, $kelas) {
    //         //     return Pelatihan::where('user_id', $user->id)
    //         //         ->where('kelas_id', $kelas->id)
    //         //         ->first();
    //         // });
    //         // Gunakan first() tanpa fail
    //     }

    //     $formattedUpdatedAt = null;

    //     if ($pelatihan) {
    //         $formattedUpdatedAt = Carbon::parse($pelatihan->updated_at)->format('d F Y');
    //     }

    //     $data = [
    //         'nama' => $pelatihan->user->username,
    //         'kelas' => $pelatihan->kelas->judul,
    //         'serial_number' => $pelatihan->serial_number,
    //         'tanggal' => $formattedUpdatedAt
    //     ];

    //     $html = view('sertifikat', $data)->render();

    //     // Buat instance DomPDF
    //     // $options = [
    //     // 'isHtml5ParserEnabled' => true,
    //     // 'isPhpEnabled' => true,
    //     // 'isPhpDebug' => true,
    //     // 'isHtml5ParserEnabled' => true,
    //     // 'isCssFloatEnabled' => true,
    //     // 'isHtml5MediaEnabled' => true,
    //     // 'isPhpDebug' => true,
    //     // 'isHtml5ParserEnabled' => true,
    //     // 'isPhpEnabled' => true,
    //     // ];

    //     $pdf = PDF::loadHtml($html, 'UTF-8');
    //     // $pdf = PDF::loadHtml($html);

    //     // Simpan atau tampilkan PDF
    //     // $pdf->save('path/to/save/file.pdf');
    //     // return $pdf->stream('example.pdf');
    //     return $pdf->download($data['nama'] . '-' . $data['kelas'] . '.pdf');
    // }

    public function cetakSertif($kelas)
    {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf();
        // $dompdf->loadHtml('hello world');
        $html = file_get_contents(resource_path('views/sertifikat.blade.php'));

        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('sertifikat.pdf');
    }
}
