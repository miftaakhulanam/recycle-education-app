<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Modul;
use App\Models\Jawaban;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function index(Modul $modul)
    {
        return view('materi.kuis', [
            "title" => "Kuis",
            "materi" => $modul->materi,
            "modul" => $modul,
            'kuis' => $modul->pertanyaan
        ]);
    }

    // public function submitKuis(Request $request, Kelas $kelas)
    // {
    //     $request->validate([
    //         'jawaban' => 'required|array',
    //         'jawaban.*' => 'required',
    //         'pertanyaan_id' => 'required|array|exists:pertanyaans,id',
    //     ]);

    //     $user_id = auth()->id();
    //     $dataPelatihan = Pelatihan::where('user_id', $user_id)
    //         ->where('kelas_id', $kelas->id)
    //         ->firstOrFail();

    //     foreach ($request->jawaban as $key => $jawaban) {
    //         $jawaban = Jawaban::create([
    //             'user_id' => $user_id,
    //             'kelas_id' => $kelas->id,
    //             'pelatihan_id' => $dataPelatihan->id,
    //             'pertanyaan_id' => $request->pertanyaan_id[$key],
    //             'jawaban' => $jawaban,
    //         ]);
    //     }

    //     $dataJawaban['jawaban_id'] = $jawaban->id;

    //     Pelatihan::where('user_id', $user_id)
    //         ->where('kelas_id', $kelas->id)
    //         ->update($dataJawaban);

    //     return redirect("/kelas/{$kelas->slug}")->with('success', 'Jawaban berhasil disubmit. Silakan tunggu info selanjutnya');
    // }

    public function submitKuis(Request $request, Kelas $kelas)
    {
        $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'required',
            'pertanyaan_id' => 'required|array|exists:pertanyaans,id',
        ]);

        $user_id = auth()->id();

        // Temukan atau buat record Pelatihan
        $dataPelatihan = Pelatihan::firstOrNew([
            'user_id' => $user_id,
            'kelas_id' => $kelas->id,
        ]);

        // Atur status lulus menjadi null
        $dataPelatihan->status_lulus = null;
        $dataPelatihan->save();

        // Hapus jawaban sebelumnya jika ada
        Jawaban::where('user_id', $user_id)
            ->where('kelas_id', $kelas->id)
            ->delete();

        // Simpan jawaban baru
        foreach ($request->jawaban as $key => $jawaban) {
            $jawaban = Jawaban::create([
                'user_id' => $user_id,
                'kelas_id' => $kelas->id,
                'pelatihan_id' => $dataPelatihan->id,
                'pertanyaan_id' => $request->pertanyaan_id[$key],
                'jawaban' => $jawaban,
            ]);
        }

        $dataJawaban['jawaban_id'] = $jawaban->id;

        Pelatihan::where('user_id', $user_id)
            ->where('kelas_id', $kelas->id)
            ->update($dataJawaban);

        return redirect("/kelas/{$kelas->slug}")->with('success', 'Jawaban berhasil disubmit. Silakan tunggu info selanjutnya');
    }
}
