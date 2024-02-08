@extends('layouts.main')

@section('container')
    <section class="pt-24 bg-white relative container font-poppins">
        <a href="/#about"
            class="absolute w-12 h-12 flex justify-center items-center bg-transparent border-2 border-main rounded-full hover:bg-main group">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-main group-hover:fill-white" width="22"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <h2 class="text-gray-900 text-5xl font-extrabold mb-14 text-center leading-tight">Apa itu <br><span
                class="text-main">Recycle
                Education
                App?</span>
        </h2>
        <div class="w-[600px] shadow-2xl float-left mr-16 mb-16">
            <div class="flex items-center flex-none px-4 bg-red-600 rounded-b-none h-7 rounded-xl">
                <div class="flex space-x-1.5">
                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                </div>
            </div>
            <img src="img/website.png" class="border-2 border-main">
        </div>
        <div class="text-lg text-justify">
            <p class="indent-10 mb-5">Recycle Education App merupakan aplikasi pelatihan pengolahan sampah berbasis
                web yang
                diharapkan mampu meningkatkan kesadaran masyakat akan sampah, dengan mengubah pandangan masyarakat
                mengenai
                sampah yang tadinya hanya diangap sebagai barang yang tidak lagi bermanfaat, menjadi suatu hal yang
                bernilai
                ekonomis.</p>
            <p class="indent-10 mb-5">Dalam Recycle Education App, pengguna akan menemukan berbagai kelas dan materi
                pembelajaran
                yang terkait
                dengan pengolahan berbagai jenis sampah, termasuk organik, plastik, dan sampah elektronik.</p>
            <p class="indent-10 mb-5">Pengguna dapat mengikuti kelas-kelas yang tersedia, seperti yang telah dijelaskan
                sebelumnya, yang mencakup materi tentang jenis sampah, metode pengumpulan, pengolahan, manfaat
                berkelanjutan, dan peran masyarakat dalam pengelolaan sampah. Setelah menyelesaikan setiap kelas, pengguna
                dapat mengikuti kuis yang menguji pengetahuan mereka tentang materi yang telah dipelajari. Ini membantu
                memastikan pemahaman yang kuat.</p>
            <p class="indent-10 mb-5">Aplikasi dapat menyediakan panduan praktis tentang cara mengurangi sampah, melakukan
                pengomposan, atau mengelola sampah plastik dalam kehidupan sehari-hari. Pengguna mungkin menerima notifikasi
                yang memberi tahu mereka tentang tantangan atau tugas yang dapat mereka selesaikan untuk mengurangi dampak
                lingkungan mereka.</p>
            <p class="indent-10 mb-5">Aplikasi ini dapat mencakup forum atau ruang obrolan di mana pengguna dapat berbagi
                pengalaman, bertukar ide, dan berdiskusi tentang topik yang terkait dengan pengelolaan sampah. Aplikasi ini
                juga dapat memberikan akses ke sumber daya terbaru, berita, dan informasi terkait dengan praktik pengelolaan
                sampah yang berkelanjutan.</p>
            <p class="indent-10 mb-16">Recycle Education App bertujuan untuk membentuk masyarakat yang lebih sadar
                lingkungan,
                berkontribusi pada pengurangan sampah, dan menjaga lingkungan hidup yang lebih bersih dan sehat. Dengan
                menyediakan sumber daya pendidikan dan informasi yang mudah diakses, aplikasi ini dapat menjadi alat penting
                dalam upaya menjaga bumi kita.</p>
        </div>
    </section>
@endsection
