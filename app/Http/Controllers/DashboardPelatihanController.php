<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class DashboardPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pelatihan.index', [
            'pelatihan' => Pelatihan::orderBy('created_at', 'desc')->paginate(5)->withQueryString()
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {

        $jawaban = Jawaban::where('user_id', $pelatihan->user_id)
            ->where('kelas_id', $pelatihan->kelas->id)
            ->get();

        return view('dashboard.pelatihan.edit', [
            'pelatihan' => $pelatihan,
            'jawaban' => $jawaban
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $dataPelatihan['status_lulus'] = $request->status_lulus;

        Pelatihan::where('id', $pelatihan->id)
            ->update($dataPelatihan);

        return redirect('/dashboard/pelatihan')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        //
    }
}
