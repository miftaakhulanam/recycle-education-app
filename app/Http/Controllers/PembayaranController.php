<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PembayaranController extends Controller
{
    public function index(Kelas $kelas)
    {
        return view('pembayaran', [
            "title" => 'Pembayaran',
            "kelas" => $kelas
        ]);
    }

    public function calculateDiscount(Request $request, Kelas $kelas)
    {
        $hargaAwal = $kelas->harga;
        $kodePromo = $request->input('kode_promo');

        // Lakukan validasi kode promo
        if ($kodePromo == 'MY_REDAPP') {
            $diskonPersen = 30; // Persentase diskon
            $diskon = $diskonPersen / 100; // Konversi persen ke desimal

            $hargaPotongan = $hargaAwal * $diskon; // Harga potongan diskon
            $hargaSetelahDiskon = $hargaAwal * (1 - $diskon);

            // Set session flash untuk pesan berhasil
            session()->flash('success', 'Promo berhasil diterapkan!');

            return response()->json([
                'success' => true,
                'harga_setelah_diskon' => $hargaSetelahDiskon,
                'diskon_persen' => $diskonPersen,
                'harga_potongan' => $hargaPotongan,
            ]);
        } else {
            // Set session flash untuk pesan kesalahan
            session()->flash('error', 'Kode promo tidak valid. Silakan coba lagi.');

            return response()->json([
                'success' => false,
            ]);
        }
    }

    // public function update(Request $request, Kelas $kelas)
    // {
    //     $rules = [
    //         'email' => 'required|email:dns|unique:users,email,' . auth()->user()->id,
    //         'username' => 'required|min:3|max:255|unique:users,username,' . auth()->user()->id,
    //         'telepon' => 'required|min:10|max:255|unique:users,telepon,' . auth()->user()->id,
    //     ];

    //     $pelatihan = [];
    //     $pelatihan['user_id'] = auth()->user()->id;
    //     $pelatihan['kelas_id'] =  $kelas->id;
    //     $pelatihan['jawaban_id'] =  null;
    //     $pelatihan['serial_number'] =  'RED' . mt_rand(0000000000, 9999999999);
    //     // $pelatihan['status_lulus'] =  '';

    //     $validatedData = $request->validate($rules);
    //     $validatedPelatihan = $pelatihan;

    //     // try {
    //     User::where('id', auth()->user()->id)->update($validatedData);
    //     Pelatihan::create($validatedPelatihan);
    //     return redirect("/modul/{$kelas->modul->slug}")->with('success', 'Pembayaran berhasil, selamat berlatih');
    //     // } catch (\Exception $e) {
    //     //     return redirect("/pembayaran/{$kelas->slug}")->with('errorPayment', 'Terjadi kesalahan. Silakan coba lagi.');
    //     // }
    // }

    public function update(Request $request, Kelas $kelas)
    {
        $rules = [
            'email' => 'required|email:dns|unique:users,email,' . auth()->user()->id,
            'username' => 'required|min:3|max:255|unique:users,username,' . auth()->user()->id,
            'telepon' => 'required|min:10|max:255|unique:users,telepon,' . auth()->user()->id,
        ];

        $pelatihanData = [
            'user_id' => auth()->user()->id,
            'kelas_id' => $kelas->id,
        ];

        // try {
        // Validasi data pengguna
        $validatedData = $request->validate($rules);

        // Update data pengguna
        User::where('id', auth()->user()->id)->update($validatedData);

        // Temukan atau buat record Pelatihan
        $pelatihan = Pelatihan::firstOrCreate($pelatihanData, [
            'jawaban_id' => null,
            'serial_number' => 'RED' . mt_rand(0000000000, 9999999999),
            'status_lulus' => null,
        ]);

        return redirect("/modul/{$kelas->modul->slug}")->with('success', 'Pembayaran berhasil, selamat berlatih');
        // } catch (\Exception $e) {
        //     return redirect("/pembayaran/{$kelas->slug}")->with('errorPayment', 'Terjadi kesalahan. Silakan coba lagi.');
        // }
    }
}
