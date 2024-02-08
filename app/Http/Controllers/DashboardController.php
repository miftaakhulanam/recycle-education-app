<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Charts\PelatihanChart;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index(PelatihanChart $chart)
    {
        return view('dashboard.index', [
            'jumlah_user' => User::whereBetween('created_at', [now()->subMonth(), now()])
                ->count(),
            'jumlah_kelas' => Kelas::count(),
            'jumlah_materi' => Materi::count(),
            'jumlah_checkout' => Pelatihan::count(),
            'chart' => $chart->build()
        ]);
    }
}
