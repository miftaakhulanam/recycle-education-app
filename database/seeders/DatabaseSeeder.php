<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Modul;
use App\Models\Materi;
use App\Models\Kategori;
use App\Models\SubModul;
use App\Models\Pertanyaan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Miftakhul Anam',
            'email' => 'miftakhulanam014@gmail.com',
            'password' => bcrypt('mifta123'), // password
            'telepon' => +6285655498655,
            'alamat' => 'Jl. KH. Hasyim Asyary Bugoharjo',
            'photo_profil' => 'profil-images/mifta.jpg',
            'remember_token' => Str::random(10)
        ]);

        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        Kelas::create([
            'kategori_id' => 1,
            // 'modul_id' => 1,
            'judul' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah',
            'harga' => 595000,
            'excerpt' => 'Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'dasar-dasar-pengolahan-sampah',
            'jml_pelanggan' => 1940,
            'waktu_pengerjaan' => 5,
            'gambar' => 'kelas-images/gambar1.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 2,
            // 'modul_id' => 2,
            'judul' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik',
            'harga' => 675000,
            'excerpt' => 'Kelas ini fokus pada pengolahan sampah organik, termasuk sisa makanan dan bahan organik lainnya.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-organik',
            'jml_pelanggan' => 1856,
            'waktu_pengerjaan' => 3,
            'gambar' => 'kelas-images/gambar2.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 3,
            // 'modul_id' => 3,
            'judul' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik',
            'harga' => 730000,
            'excerpt' => 'Kelas ini membahas masalah serius sampah plastik dan bagaimana kita dapat mengatasi masalah ini.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-plastik',
            'jml_pelanggan' => 1245,
            'waktu_pengerjaan' => 7,
            'gambar' => 'kelas-images/gambar3.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 4,
            // 'modul_id' => 4,
            'judul' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik',
            'harga' => 899000,
            'excerpt' => 'Kelas ini berfokus pada pengolahan sampah elektronik, yang melibatkan perangkat dan peralatan listrik. ',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-elektronik',
            'jml_pelanggan' => 1651,
            'waktu_pengerjaan' => 4,
            'gambar' => 'kelas-images/gambar4.jpg'
        ]);



        // kelas duplikat
        Kelas::create([
            'kategori_id' => 1,
            // 'modul_id' => 5,
            'judul' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-satu',
            'harga' => 595000,
            'excerpt' => 'Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'dasar-dasar-pengolahan-sampah',
            'jml_pelanggan' => 1940,
            'waktu_pengerjaan' => 5,
            'gambar' => 'kelas-images/gambar2.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 2,
            // 'modul_id' => 6,
            'judul' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-satu',
            'harga' => 675000,
            'excerpt' => 'Kelas ini fokus pada pengolahan sampah organik, termasuk sisa makanan dan bahan organik lainnya.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-organik',
            'jml_pelanggan' => 1856,
            'waktu_pengerjaan' => 3,
            'gambar' => 'kelas-images/gambar3.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 3,
            // 'modul_id' => 7,
            'judul' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-satu',
            'harga' => 730000,
            'excerpt' => 'Kelas ini membahas masalah serius sampah plastik dan bagaimana kita dapat mengatasi masalah ini.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-plastik',
            'jml_pelanggan' => 1245,
            'waktu_pengerjaan' => 7,
            'gambar' => 'kelas-images/gambar4.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 4,
            // 'modul_id' => 8,
            'judul' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-satu',
            'harga' => 899000,
            'excerpt' => 'Kelas ini berfokus pada pengolahan sampah elektronik, yang melibatkan perangkat dan peralatan listrik. ',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-elektronik',
            'jml_pelanggan' => 1651,
            'waktu_pengerjaan' => 4,
            'gambar' => 'kelas-images/gambar1.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 1,
            // 'modul_id' => 9,
            'judul' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-dua',
            'harga' => 595000,
            'excerpt' => 'Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'dasar-dasar-pengolahan-sampah',
            'jml_pelanggan' => 1940,
            'waktu_pengerjaan' => 5,
            'gambar' => 'kelas-images/gambar3.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 2,
            // 'modul_id' => 10,
            'judul' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-dua',
            'harga' => 675000,
            'excerpt' => 'Kelas ini fokus pada pengolahan sampah organik, termasuk sisa makanan dan bahan organik lainnya.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-organik',
            'jml_pelanggan' => 1856,
            'waktu_pengerjaan' => 3,
            'gambar' => 'kelas-images/gambar4.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 3,
            // 'modul_id' => 11,
            'judul' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-dua',
            'harga' => 730000,
            'excerpt' => 'Kelas ini membahas masalah serius sampah plastik dan bagaimana kita dapat mengatasi masalah ini.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-plastik',
            'jml_pelanggan' => 1245,
            'waktu_pengerjaan' => 7,
            'gambar' => 'kelas-images/gambar1.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 4,
            // 'modul_id' => 12,
            'judul' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-dua',
            'harga' => 899000,
            'excerpt' => 'Kelas ini berfokus pada pengolahan sampah elektronik, yang melibatkan perangkat dan peralatan listrik. ',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-elektronik',
            'jml_pelanggan' => 1651,
            'waktu_pengerjaan' => 4,
            'gambar' => 'kelas-images/gambar2.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 1,
            // 'modul_id' => 13,
            'judul' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-tiga',
            'harga' => 595000,
            'excerpt' => 'Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'dasar-dasar-pengolahan-sampah',
            'jml_pelanggan' => 1940,
            'waktu_pengerjaan' => 5,
            'gambar' => 'kelas-images/gambar4.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 2,
            // 'modul_id' => 14,
            'judul' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-tiga',
            'harga' => 675000,
            'excerpt' => 'Kelas ini fokus pada pengolahan sampah organik, termasuk sisa makanan dan bahan organik lainnya.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-organik',
            'jml_pelanggan' => 1856,
            'waktu_pengerjaan' => 3,
            'gambar' => 'kelas-images/gambar1.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 3,
            // 'modul_id' => 15,
            'judul' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-tiga',
            'harga' => 730000,
            'excerpt' => 'Kelas ini membahas masalah serius sampah plastik dan bagaimana kita dapat mengatasi masalah ini.',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-plastik',
            'jml_pelanggan' => 1245,
            'waktu_pengerjaan' => 7,
            'gambar' => 'kelas-images/gambar2.jpg'
        ]);

        Kelas::create([
            'kategori_id' => 4,
            // 'modul_id' => 16,
            'judul' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-tiga',
            'harga' => 899000,
            'excerpt' => 'Kelas ini berfokus pada pengolahan sampah elektronik, yang melibatkan perangkat dan peralatan listrik. ',
            'deskripsi' => '<p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
            tentang apa itu sampah, jenis-jenis sampah, dan dampaknya pada lingkungan. Para peserta akan belajar
            tentang cara-cara efisien mengumpulkan sampah dan pentingnya pemilahan sampah. Kelas ini juga membahas
            konsep pengurangan sampah, daur ulang, dan peran individu dalam upaya pengelolaan sampah yang
            berkelanjutan.</p>
        <br>
        <p>Materi yang akan kalian dapatkan</p><br>
        <p>Materi 1 : Pengenalan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Definisi Sampah</li>
            <li>Jenis-jenis Sampah (organik, anorganik, berbahaya)</li>
            <li>Dampak Sampah pada Lingkungan</li>
        </ul><br>
        <p>Materi 2 : Pengumpulan Sampah</p>
        <ul class="list-disc list-inside">
            <li>Metode Pengumpulan Sampah (tempat sampah, truk sampah, dll.)</li>
            <li>Prinsip-prinsip Pengumpulan yang Efisien</li>
            <li>Inisiatif Pemilahan Sampah</li>
        </ul><br>
        <p>Materi 3 : Pengelolaan Sampah Secara Berkelanjutan</p>
        <ul class="list-disc list-inside">
            <li>Konsep Pengurangan, Daur Ulang, dan Daur Ulang Kembali</li>
            <li>Manfaat Berkelanjutan dalam Pengolahan Sampah</li>
            <li>Peran Individu dalam Pengurangan Sampah</li>
        </ul>',
            'kuis' => 'pengolahan-sampah-elektronik',
            'jml_pelanggan' => 1651,
            'waktu_pengerjaan' => 4,
            'gambar' => 'kelas-images/gambar3.jpg'
        ]);


        // Akhir

        Kategori::create([
            'nama' => 'Basic',
            'slug' => 'basic',
            'gambar' => 'kategori-images/kategori1.jpg'
        ]);

        Kategori::create([
            'nama' => 'Intermediate',
            'slug' => 'intermediate',
            'gambar' => 'kategori-images/kategori2.jpg'
        ]);

        Kategori::create([
            'nama' => 'Advanced',
            'slug' => 'advanced',
            'gambar' => 'kategori-images/kategori3.jpg'
        ]);

        Kategori::create([
            'nama' => 'Expert',
            'slug' => 'expert',
            'gambar' => 'kategori-images/kategori4.jpg'
        ]);


        // Modul
        Modul::create([
            'kelas_id' => 1,
            'nama' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah',
        ]);

        Modul::create([
            'kelas_id' => 2,
            'nama' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik'
        ]);

        Modul::create([
            'kelas_id' => 3,
            'nama' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik'
        ]);

        Modul::create([
            'kelas_id' => 4,
            'nama' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik'
        ]);
        Modul::create([
            'kelas_id' => 5,
            'nama' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-satu',
        ]);

        Modul::create([
            'kelas_id' => 6,
            'nama' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-satu'
        ]);

        Modul::create([
            'kelas_id' => 7,
            'nama' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-satu'
        ]);

        Modul::create([
            'kelas_id' => 8,
            'nama' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-satu'
        ]);
        Modul::create([
            'kelas_id' => 9,
            'nama' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-dua',
        ]);

        Modul::create([
            'kelas_id' => 10,
            'nama' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-dua'
        ]);

        Modul::create([
            'kelas_id' => 11,
            'nama' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-dua'
        ]);

        Modul::create([
            'kelas_id' => 12,
            'nama' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-dua'
        ]);
        Modul::create([
            'kelas_id' => 13,
            'nama' => 'Dasar-Dasar Pengolahan Sampah',
            'slug' => 'dasar-dasar-pengolahan-sampah-tiga',
        ]);

        Modul::create([
            'kelas_id' => 14,
            'nama' => 'Pengolahan Sampah Organik',
            'slug' => 'pengolahan-sampah-organik-tiga'
        ]);

        Modul::create([
            'kelas_id' => 15,
            'nama' => 'Pengolahan Sampah Plastik',
            'slug' => 'pengolahan-sampah-plastik-tiga'
        ]);

        Modul::create([
            'kelas_id' => 16,
            'nama' => 'Pengolahan Sampah Elektronik',
            'slug' => 'pengolahan-sampah-elektronik-tiga'
        ]);


        // Materi modul1
        Materi::create([
            'modul_id' => 1,
            'nama' => 'Pengenalan Sampah',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 1,
            'nama' => 'Pengumpulan Sampah',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 1,
            'nama' => 'Pengolahan Sampah',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul2
        Materi::create([
            'modul_id' => 2,
            'nama' => 'Sampah Organik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 2,
            'nama' => 'Pengomposan Sampah',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 2,
            'nama' => 'Manfaat Sampah Organik',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul3
        Materi::create([
            'modul_id' => 3,
            'nama' => 'Sampah Plastik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 3,
            'nama' => 'Mengolah Sampah Plastik',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 3,
            'nama' => 'Daur Ulang Sampah Plastik',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul4
        Materi::create([
            'modul_id' => 4,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 4,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 4,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul5
        Materi::create([
            'modul_id' => 5,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 5,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 5,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul6
        Materi::create([
            'modul_id' => 6,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 6,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 6,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul7
        Materi::create([
            'modul_id' => 7,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 7,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 7,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul8
        Materi::create([
            'modul_id' => 8,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 8,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 8,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul9
        Materi::create([
            'modul_id' => 9,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 9,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 9,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul10
        Materi::create([
            'modul_id' => 10,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 10,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 10,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul11
        Materi::create([
            'modul_id' => 11,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 11,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 11,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul12
        Materi::create([
            'modul_id' => 12,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 12,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 12,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul13
        Materi::create([
            'modul_id' => 13,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 13,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 13,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul14
        Materi::create([
            'modul_id' => 14,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 14,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 14,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul15
        Materi::create([
            'modul_id' => 15,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 15,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 15,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        // Materi modul16
        Materi::create([
            'modul_id' => 16,
            'nama' => 'Sampah Elektronik',
            'page' => 1,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 16,
            'nama' => 'Pengolahan E-Waste',
            'page' => 2,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);

        Materi::create([
            'modul_id' => 16,
            'nama' => 'Daur Ulang e-Waste',
            'page' => 3,
            'body' => collect(fake()->paragraphs(mt_rand(20, 25)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ]);


        // pertanyaan
        Pertanyaan::insert([
            [
                'modul_id' => 1,
                'pertanyaan' => 'Apa definisi dari sampah?'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Sebutkan tiga jenis sampah yang umum.'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Bagaimana dampak sampah pada lingkungan?'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Apa prinsip-prinsip pengumpulan sampah yang efisien?'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Mengapa inisiatif pemilahan sampah penting?'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Apa yang dimaksud dengan konsep pengurangan sampah?'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Jelaskan manfaat berkelanjutan dalam pengolahan sampah.'
            ],
            [
                'modul_id' => 1,
                'pertanyaan' => 'Apa peran individu dalam pengurangan sampah?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Apa yang membedakan sampah organik dengan sampah lainnya?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Bagaimana proses pembusukan bekerja pada sampah organik?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Apa itu pengomposan, dan bagaimana itu dilakukan?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Sebutkan dua metode pengolahan sampah organik di tingkat rumah tangga.'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Apa manfaat utama dari menggunakan kompos sebagai pupuk organik?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Bagaimana teknik pengolahan sampah organik beroperasi dalam skala besar?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Bagaimana pengolahan sampah organik dapat mendukung pertanian berkelanjutan?'
            ],
            [
                'modul_id' => 2,
                'pertanyaan' => 'Mengapa pengurangan limbah di tempat pembuangan akhir penting?'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Jelaskan dampak lingkungan dari sampah plastik.'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Sebutkan tiga jenis plastik yang umum digunakan.'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Apa yang dimaksud dengan biodegradabilitas plastik?'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Bagaimana pengurangan sampah plastik dapat dilakukan dalam kehidupan sehari-hari?'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Apa peran kampanye Zero Waste dalam mengatasi sampah plastik?'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Jelaskan proses daur ulang plastik secara singkat.'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Apa manfaat dari daur ulang plastik?'
            ],
            [
                'modul_id' => 3,
                'pertanyaan' => 'Bagaimana individu dapat berkontribusi pada pengelolaan limbah plastik yang berkelanjutan?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Apa yang dimaksud dengan E-Waste?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Sebutkan dua jenis E-Waste yang umum.'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Apa bahaya kesehatan yang terkait dengan E-Waste?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Bagaimana program penerimaan E-Waste dapat membantu?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Jelaskan proses pemilahan dan pemrosesan E-Waste.'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Apa prinsip-prinsip pengolahan E-Waste yang ramah lingkungan?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Bagaimana komponen elektronik dapat didaur ulang?'
            ],
            [
                'modul_id' => 4,
                'pertanyaan' => 'Mengapa partisipasi masyarakat penting dalam pengelolaan E-Waste?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Apa definisi dari sampah?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Sebutkan tiga jenis sampah yang umum.'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Bagaimana dampak sampah pada lingkungan?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Apa prinsip-prinsip pengumpulan sampah yang efisien?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Mengapa inisiatif pemilahan sampah penting?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Apa yang dimaksud dengan konsep pengurangan sampah?'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Jelaskan manfaat berkelanjutan dalam pengolahan sampah.'
            ],
            [
                'modul_id' => 5,
                'pertanyaan' => 'Apa peran individu dalam pengurangan sampah?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Apa yang membedakan sampah organik dengan sampah lainnya?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Bagaimana proses pembusukan bekerja pada sampah organik?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Apa itu pengomposan, dan bagaimana itu dilakukan?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Sebutkan dua metode pengolahan sampah organik di tingkat rumah tangga.'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Apa manfaat utama dari menggunakan kompos sebagai pupuk organik?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Bagaimana teknik pengolahan sampah organik beroperasi dalam skala besar?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Bagaimana pengolahan sampah organik dapat mendukung pertanian berkelanjutan?'
            ],
            [
                'modul_id' => 6,
                'pertanyaan' => 'Mengapa pengurangan limbah di tempat pembuangan akhir penting?'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Jelaskan dampak lingkungan dari sampah plastik.'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Sebutkan tiga jenis plastik yang umum digunakan.'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Apa yang dimaksud dengan biodegradabilitas plastik?'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Bagaimana pengurangan sampah plastik dapat dilakukan dalam kehidupan sehari-hari?'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Apa peran kampanye Zero Waste dalam mengatasi sampah plastik?'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Jelaskan proses daur ulang plastik secara singkat.'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Apa manfaat dari daur ulang plastik?'
            ],
            [
                'modul_id' => 7,
                'pertanyaan' => 'Bagaimana individu dapat berkontribusi pada pengelolaan limbah plastik yang berkelanjutan?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Apa yang dimaksud dengan E-Waste?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Sebutkan dua jenis E-Waste yang umum.'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Apa bahaya kesehatan yang terkait dengan E-Waste?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Bagaimana program penerimaan E-Waste dapat membantu?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Jelaskan proses pemilahan dan pemrosesan E-Waste.'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Apa prinsip-prinsip pengolahan E-Waste yang ramah lingkungan?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Bagaimana komponen elektronik dapat didaur ulang?'
            ],
            [
                'modul_id' => 8,
                'pertanyaan' => 'Mengapa partisipasi masyarakat penting dalam pengelolaan E-Waste?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Apa definisi dari sampah?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Sebutkan tiga jenis sampah yang umum.'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Bagaimana dampak sampah pada lingkungan?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Apa prinsip-prinsip pengumpulan sampah yang efisien?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Mengapa inisiatif pemilahan sampah penting?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Apa yang dimaksud dengan konsep pengurangan sampah?'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Jelaskan manfaat berkelanjutan dalam pengolahan sampah.'
            ],
            [
                'modul_id' => 9,
                'pertanyaan' => 'Apa peran individu dalam pengurangan sampah?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Apa yang membedakan sampah organik dengan sampah lainnya?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Bagaimana proses pembusukan bekerja pada sampah organik?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Apa itu pengomposan, dan bagaimana itu dilakukan?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Sebutkan dua metode pengolahan sampah organik di tingkat rumah tangga.'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Apa manfaat utama dari menggunakan kompos sebagai pupuk organik?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Bagaimana teknik pengolahan sampah organik beroperasi dalam skala besar?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Bagaimana pengolahan sampah organik dapat mendukung pertanian berkelanjutan?'
            ],
            [
                'modul_id' => 10,
                'pertanyaan' => 'Mengapa pengurangan limbah di tempat pembuangan akhir penting?'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Jelaskan dampak lingkungan dari sampah plastik.'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Sebutkan tiga jenis plastik yang umum digunakan.'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Apa yang dimaksud dengan biodegradabilitas plastik?'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Bagaimana pengurangan sampah plastik dapat dilakukan dalam kehidupan sehari-hari?'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Apa peran kampanye Zero Waste dalam mengatasi sampah plastik?'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Jelaskan proses daur ulang plastik secara singkat.'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Apa manfaat dari daur ulang plastik?'
            ],
            [
                'modul_id' => 11,
                'pertanyaan' => 'Bagaimana individu dapat berkontribusi pada pengelolaan limbah plastik yang berkelanjutan?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Apa yang dimaksud dengan E-Waste?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Sebutkan dua jenis E-Waste yang umum.'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Apa bahaya kesehatan yang terkait dengan E-Waste?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Bagaimana program penerimaan E-Waste dapat membantu?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Jelaskan proses pemilahan dan pemrosesan E-Waste.'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Apa prinsip-prinsip pengolahan E-Waste yang ramah lingkungan?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Bagaimana komponen elektronik dapat didaur ulang?'
            ],
            [
                'modul_id' => 12,
                'pertanyaan' => 'Mengapa partisipasi masyarakat penting dalam pengelolaan E-Waste?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Apa definisi dari sampah?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Sebutkan tiga jenis sampah yang umum.'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Bagaimana dampak sampah pada lingkungan?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Apa prinsip-prinsip pengumpulan sampah yang efisien?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Mengapa inisiatif pemilahan sampah penting?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Apa yang dimaksud dengan konsep pengurangan sampah?'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Jelaskan manfaat berkelanjutan dalam pengolahan sampah.'
            ],
            [
                'modul_id' => 13,
                'pertanyaan' => 'Apa peran individu dalam pengurangan sampah?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Apa yang membedakan sampah organik dengan sampah lainnya?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Bagaimana proses pembusukan bekerja pada sampah organik?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Apa itu pengomposan, dan bagaimana itu dilakukan?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Sebutkan dua metode pengolahan sampah organik di tingkat rumah tangga.'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Apa manfaat utama dari menggunakan kompos sebagai pupuk organik?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Bagaimana teknik pengolahan sampah organik beroperasi dalam skala besar?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Bagaimana pengolahan sampah organik dapat mendukung pertanian berkelanjutan?'
            ],
            [
                'modul_id' => 14,
                'pertanyaan' => 'Mengapa pengurangan limbah di tempat pembuangan akhir penting?'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Jelaskan dampak lingkungan dari sampah plastik.'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Sebutkan tiga jenis plastik yang umum digunakan.'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Apa yang dimaksud dengan biodegradabilitas plastik?'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Bagaimana pengurangan sampah plastik dapat dilakukan dalam kehidupan sehari-hari?'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Apa peran kampanye Zero Waste dalam mengatasi sampah plastik?'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Jelaskan proses daur ulang plastik secara singkat.'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Apa manfaat dari daur ulang plastik?'
            ],
            [
                'modul_id' => 15,
                'pertanyaan' => 'Bagaimana individu dapat berkontribusi pada pengelolaan limbah plastik yang berkelanjutan?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Apa yang dimaksud dengan E-Waste?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Sebutkan dua jenis E-Waste yang umum.'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Apa bahaya kesehatan yang terkait dengan E-Waste?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Bagaimana program penerimaan E-Waste dapat membantu?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Jelaskan proses pemilahan dan pemrosesan E-Waste.'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Apa prinsip-prinsip pengolahan E-Waste yang ramah lingkungan?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Bagaimana komponen elektronik dapat didaur ulang?'
            ],
            [
                'modul_id' => 16,
                'pertanyaan' => 'Mengapa partisipasi masyarakat penting dalam pengelolaan E-Waste?'
            ],
        ]);
    }
}
