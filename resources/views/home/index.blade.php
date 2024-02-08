@extends('layouts.main')

@section('container')
    {{-- jumbotron --}}
    <section class="bg-center bg-no-repeat" style="background-image: url('img/bg2.jpg')" id="home">
        <div class="backdrop-filter backdrop-blur-3xl bg-opacity-100">
            <div class="px-4 md:container h-screen flex flex-col md:flex-row gap-14 ">
                <div class="flex flex-col justify-center items-start max-w-screen-xl w-[60%] text-left">
                    <h1 class="mb-4 text-4xl font-extrabold font-poppins tracking-tight leading-none text-black md:text-7xl">
                        Welcome to <span class="text-main">Recycle<br>Education App</span></h1>
                    <p class="mb-8 text-lg font-light font-poppins text-black lg:text-lg">Bersama Kami,
                        Mari
                        Bergabung dalam Misi Besar untuk Mengubah Cara Kita Memandang Sampah,
                        Mengelolanya dengan Cerdas dan
                        Membentuk Masa Depan yang Lebih Hijau untuk Generasi Mendatang!
                    </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                        <a href="/kategori"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-poppins font-medium text-center text-white rounded-full bg-main hover:bg-red-800 dark:focus:ring-main">
                            Registration
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="/about"
                            class="inline-flex justify-center font-poppins hover:text-white items-center py-3 px-5 box-border text-base font-medium text-center text-main rounded-full border-2 border-main hover:bg-main">
                            Learn more
                        </a>
                    </div>
                </div>
                <div class="w-[40%] flex justify-center items-center">
                    <img src="img/hero-image.png"
                        class="w-[590px] animate__animated animate__pulse animate__slow animate__infinite" alt="">
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="relative">

        <div id="default-carousel" class="absolute w-full -z-10 h-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/jumbo1.jpg"
                        class="absolute block object-cover h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/jumbo2.jpg"
                        class="absolute block object-cover h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/jumbo3.jpg"
                        class="absolute block object-cover h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/jumbo4.jpg"
                        class="absolute block object-cover h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/jumbo5.jpg"
                        class="absolute block object-cover h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
        </div>


        <div class="bg-gray-900 bg-blend-multiply z-10 bg-opacity-75" id="home">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-52 lg:py-64">
                <h1 class="mb-4 text-4xl font-extrabold font-poppins tracking-tight leading-none text-white md:text-7xl">
                    Welcome to <span class="text-main">Recycle<br>Education App</span></h1>
                <p class="mb-8 text-lg font-light font-poppins text-gray-300 lg:text-xl sm:px-16 lg:px-48">Bersama Kami,
                    Mari
                    Bergabung dalam Misi Besar untuk Mengubah Cara Kita Memandang Sampah,
                    Mengelolanya dengan Cerdas dan
                    Membentuk Masa Depan yang Lebih Hijau untuk Generasi Mendatang!
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-poppins font-medium text-center text-white rounded-lg bg-main hover:bg-red-800 focus:ring-4 focus:ring-red-600 dark:focus:ring-main">
                        Registration
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center font-poppins hover:text-white items-center py-3 px-5 box-border text-base font-medium text-center text-main rounded-lg border-2 border-main hover:bg-main focus:ring-4 focus:ring-red-600">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- Partner --}}

    <section
        class="px-4 md:container grid grid-cols-3 text-white font-poppins text-base font-light bg-main place-items-center py-28">
        @include('home._partner')
    </section>



    {{-- About --}}

    <section class="px-4 md:container grid grid-cols-2 font-poppins place-items-center py-24  gap-x-5 relative"
        id="about">
        @include('home._about')
    </section>


    {{-- Kelas --}}

    <section class="px-4 md:container bg-gray-200 font-poppins grid grid-cols-2  place-content-evenly py-28 gap-10"
        id="kelas">
        @include('home._kelas')
    </section>


    {{-- pelatihan --}}


    <section class="px-4 md:container bg-white font-poppins" id="pelatihan">
        @include('home._pelatihan')
    </section>


    {{-- Pertanyaan --}}

    <section class="px-4 md:container py-32 font-poppins">
        @include('home._pertanyaan')
    </section>


    {{-- footer --}}


    <footer class="bg-footer dark:bg-gray-900 py-10 font-poppins" id="kontak">
        @include('home._footer')
    </footer>

    {{-- kontak kami --}}

    <a href="https://Wa.me/6285655498655?text=Halo%20Recycle%20Education%20App,%20saya%20mempunyai%20pertanyaan%20tentang%20pelatihan%20pengolahan%20sampah"
        target="_blank"
        class="fixed right-4 bottom-4 z-50 h-12 w-12 bg-main flex justify-center items-center rounded-full cursor-pointer hover:bg-red-800">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.9em" class="fill-white"
            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
        </svg>
    </a>
@endsection
