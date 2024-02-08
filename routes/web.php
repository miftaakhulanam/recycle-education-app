<?php

use App\Models\Kelas;
use App\Models\Modul;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardPelatihanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index', [
        "kelas" => Kelas::limit(4)->get()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [UserController::class, 'index'])->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'edit'])->middleware('auth');
Route::post('/profile/{user:username}', [UserController::class, 'update'])->middleware('auth');

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/kelas/{kelas:slug}', [KelasController::class, 'show']);

Route::get('cetak-sertifikat/{kelas}', [KelasController::class, 'cetakSertif']);
// Route::get('cetak-sertifikat', [KelasController::class, 'cetakSertif']);

Route::get('/kategori', function () {
    return view('categories', [
        'kategori' => Kategori::all()
    ]);
});
Route::get('/kategori/{kategori:slug}', function (Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->nama,
        'kelas' => $kategori->kelas->load('kategori')
    ]);
});

Route::get('/pembayaran/{kelas:slug}', [PembayaranController::class, 'index'])->middleware('auth');
Route::post('/pembayaran/{kelas:slug}', [PembayaranController::class, 'update']);
Route::post('/calculate-discount/{kelas:slug}', [PembayaranController::class, 'calculateDiscount']);

Route::get('/modul/{modul:slug}', function (Modul $modul) {
    $materi = $modul->materi()->paginate(1)->withQueryString();
    return view('materi.materi', [
        "title" => "Modul",
        "materi" => $modul->materi,
        "modul" => $modul,
        "body" => $materi->appends(['modul' => $modul])
    ]);
})->middleware('auth');

Route::get('/paginate/{modul:slug}', function (Modul $modul) {
    return view('vendor.pagination.simple-tailwind', $modul);
});

Route::get('/kuis/{modul:slug}', [KuisController::class, 'index'])->middleware('auth');
Route::post('/kuis/{kelas:slug}', [KuisController::class, 'submitKuis']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::get('/dashboard/kelas/checkSlug', [DashboardKelasController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/kelas', DashboardKelasController::class)->parameters(['kelas' => 'slug'])->middleware('admin');
Route::post('/upload', [DashboardKelasController::class, 'upload'])->middleware('admin');

Route::resource('/dashboard/member', DashboardUserController::class)->parameters(['member' => 'username'])->middleware('admin');

Route::get('/dashboard/kategori/checkSlug', [DashboardKategoriController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/kategori', DashboardKategoriController::class)->parameters(['kelas' => 'slug'])->middleware('admin');

Route::resource('/dashboard/pelatihan', DashboardPelatihanController::class)->middleware('admin');
// ->parameters(['kelas' => 'slug'])
