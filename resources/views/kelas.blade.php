@extends('layouts.main')

@section('container')
    <div class="absolute flex justify-center items-center w-full top-3 right-0 z-[999]">
        @if (session()->has('success'))
            <button data-modal-toggle="popup-modal" class="hidden">
            </button>
            <div id="popup-modal" tabindex="-1"
                class="absolute animate-bounce flex items-center border-b-4 border-green-500 top-3 w-max p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-modal-hide="popup-modal">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <section class="container bg-slate-50 pt-24 pb-10 font-poppins">
        <div class="bg-white h-64 rounded-3xl flex flex-row justify-between shadow-lg">
            <div class="flex flex-row p-6">
                <img src="{{ asset('storage/' . $kelas->gambar) }}" class="rounded-2xl">
                <div class="flex flex-col justify-around p-4 leading-normal ml-4">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $kelas->judul }}
                    </h5>
                    <p>Rp. <span
                            class="text-xl font-semibold text-black">{{ number_format($kelas->harga, 0, ',', ',') }}</span>
                    </p>
                    <div class="flex gap-5 fill-gray-700 text-gray-700">
                        <p>Kategori : <a href="/kategori/{{ $kelas->kategori->slug }}"
                                class="hover:text-main underline">{{ $kelas->kategori->nama }}</a></p>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                            <p>{{ $kelas->waktu_pengerjaan }} Jam</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <p>{{ number_format($kelas->jml_pelanggan, 0, ',', '.') }} Orang</p>
                        </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $kelas->excerpt }}</p>
                </div>
            </div>
            <div class="w-[20%] flex flex-col gap-3 justify-center items-center mr-7">
                @can('lulus', [$kelas])
                    <div
                        class="py-3 w-full h-min text-center bg-green-100 text-green-500 font-medium text-sm rounded-full border border-green-500 box-border">
                        Anda sudah lulus
                    </div>
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                        class="py-3 w-full text-center h-min bg-main text-white font-medium rounded-full hover:bg-red-800">
                        Lihat Sertifikat
                    </button>
                @elsecan('tidak_lulus', [$kelas])
                    <div
                        class="py-3 w-full text-center h-min bg-red-100 text-main font-medium text-sm rounded-full border border-main box-border">
                        Anda tidak lulus
                    </div>
                    <a href="/pembayaran/{{ $kelas->slug }}"
                        class="py-3 w-full text-center h-min bg-main text-white font-medium rounded-full hover:bg-red-800">
                        Mulai Berlatih
                    </a>
                @else
                    <a href="/pembayaran/{{ $kelas->slug }}"
                        class="py-3 w-full text-center h-min bg-main text-white font-medium rounded-full hover:bg-red-800">
                        Mulai Berlatih
                    </a>
                @endcan

                <!-- Main modal -->
                <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-3xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Recycle Education App Certificate
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="static-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="px-4 md:px-5 font-poppins">
                                <div
                                    style="position: relative; width: 100%; height: 0; padding-top: 70.7071%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                                    {{-- @section('sertifikat') --}}
                                    @if ($pelatihan)
                                        <img src="{{ asset('img/sertifikat.webp') }}"
                                            class="absolute w-full h-full top-0 left-0" alt="">

                                        <h1
                                            class="absolute text-[#940E0E] text-4xl font-semibold -mt-2 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            {{ $pelatihan->user->username }}
                                        </h1>
                                        <h1
                                            class="absolute text-white text-base font-normal mt-14 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            {{ $pelatihan->kelas->judul }}
                                        </h1>
                                        <p
                                            class="absolute text-white text-[11px] font-light -ml-[105px] mt-[178px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            {{ $pelatihan->serial_number }}
                                        </p>
                                        <p
                                            class="absolute text-white text-[11px] font-light -ml-[205px] mt-[164px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            {{ $formattedUpdatedAt }}
                                        </p>
                                    @endif
                                    {{-- @show --}}
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <a href="{{ url('cetak-sertifikat/' . $kelas->id) }}"
                                    class="text-white bg-main hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Klaim
                                    Sertifikat</a>
                                <button data-modal-hide="static-modal" type="button"
                                    class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg border-2 border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        {{-- benefit --}}

        <section class="bg-white rounded-3xl mt-5 dark:bg-gray-900 p-10 shadow-lg">
            <h2 class="text-xl font-semibold mb-5">Apa yang akan Anda dapatkan?</h2>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-5 md:space-y-0">
                <div
                    class="border border-zinc-300 rounded-2xl p-5 hover:ring-2 hover:ring-main hover:bg-red-50 group duration-500">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-800 group-hover:fill-main duration-500"
                            height="2em"
                            viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Sertifikat</h3>
                    <p class="text-gray-500 dark:text-gray-400">Dapatkan sertifikat standar industri setelah menyelesaikan
                        kelas ini.</p>
                </div>
                <div
                    class="border border-zinc-300 rounded-2xl p-5 hover:ring-2 hover:ring-main hover:bg-red-50 group duration-500">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-800 group-hover:fill-main duration-500"
                            height="2em"
                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Modul Pelatihan</h3>
                    <p class="text-gray-500 dark:text-gray-400">Materi bacaan elektronik disajikan dengan bahasa yang mudah
                        dipahami.</p>
                </div>
                <div
                    class="border border-zinc-300 rounded-2xl p-5 hover:ring-2 hover:ring-main hover:bg-red-50 group duration-500">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-800 group-hover:fill-main duration-500"
                            height="2em"
                            viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Kuis</h3>
                    <p class="text-gray-500 dark:text-gray-400">Validasi pengetahuan anda dengan mengerjakan soal-soal
                        kuis.
                    </p>
                </div>
            </div>

            <div class="text-lg">
                <div class="mb-7">
                    <h2 class="text-xl font-semibold mb-2 mt-16">Deskripsi kelas</h2>
                    <div class="h-1 w-24 bg-gray-800"></div>
                </div>
                {{-- <p>Kelas ini bertujuan untuk memberikan pemahaman dasar tentang pengolahan sampah. Ini mencakup pengenalan
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
                </ul> --}}
                {!! $kelas->deskripsi !!}
            </div>


        </section>


    </section>
@endsection
