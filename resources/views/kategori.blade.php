@extends('layouts.main')

@section('container')
    <section class="bg-slate-50 h-[100%]">
        <div class="px-4 md:container font-poppins grid grid-cols-2  place-content-evenly py-28 gap-10">
            <div class="col-span-2 mb-5">
                <h2 class="text-gray-900 text-4xl font-extrabold text-center">Kelas dari Kategori
                    <span class="text-main">{{ $title }}!</span>
                </h2>
            </div>
            @foreach ($kelas as $k)
                <a href="/kelas/{{ $k->slug }}"
                    class="flex flex-col items-center bg-white rounded-3xl overflow-hidden shadow-md md:flex-row duration-500 group hover:scale-105 hover:ring-2 hover:ring-red-400 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover rounded-t-lg h-full w-[40%] md:rounded-none md:rounded-l-lg"
                        src="{{ asset('storage/' . $k->gambar) }}" alt="kelas-{{ $k->judul }}">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <p class="bg-main text-white d-inline px-3 w-fit text-sm rounded-full mb-2 font-normal">
                            {{ $k->kategori->nama }}</p>
                        <h5
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-main duration-100 dark:text-white">
                            {{ $k->judul }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $k->excerpt }}</p>
                        <div class="flex gap-5 fill-gray-700 text-gray-700">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path
                                        d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <p>{{ $k->waktu_pengerjaan }} Jam</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                                <p>{{ $k->jml_pelanggan }} Orang</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
