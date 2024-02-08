@extends('layouts.main')

@section('container')
    <section class="h-[100%]">
        <div class="px-56 font-poppins grid grid-cols-2  place-content-center py-20 gap-10">
            <div class="col-span-2">
                <h2 class="text-gray-900 text-4xl my-5 font-extrabold text-center">Pilih Kategori
                    <span class="text-main">Pelatihanmu</span>
                </h2>
            </div>
            @foreach ($kategori as $k)
                <a href="/kategori/{{ $k->slug }}"
                    class="w-[500px] h-56 rounded-3xl bg-cover overflow-hidden hover:-translate-y-5 duration-300 group"
                    style="background-image: url({{ asset('storage/' . $k->gambar) }})">
                    <div class="w-full h-full flex items-end p-10 bg-gradient-to-r from-main group-hover:from-red-900">
                        <p class="text-4xl font-semibold text-white">{{ $k->nama }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
