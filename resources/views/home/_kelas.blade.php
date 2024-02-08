<div class="col-span-2 mb-5">
    <h2 class="text-gray-900 text-4xl mb-5 font-extrabold text-center">Jelajahi Kelas Pelatihan yang
        <span class="text-main">Menginspirasi!</span>
    </h2>
    <p class="text-gray-800 leading-relaxed text-center">Terdapat kategori Basic, Intermediate, Advanced dan Expert.
        Tantangan meningkat seiring dengan kemajuan Anda!
        Mulai dari kategori Basic yang memberikan fondasi kuat, hingga kategori Expert yang menghadirkan tantangan
        tingkat
        lanjut.</p>
</div>
@foreach ($kelas as $k)
    <a href="/kelas/{{ $k->slug }}"
        class="flex flex-col items-center bg-white rounded-3xl overflow-hidden shadow md:flex-row duration-500 group hover:scale-105 hover:ring-2 hover:ring-red-400 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover rounded-t-lg h-full w-[40%] md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $k->gambar) }}" alt="kelas-{{ $k->judul }}">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <p class="bg-main text-white d-inline px-3 w-fit text-sm rounded-full mb-2 font-normal">
                {{ $k->kategori->nama }}</p>
            <h5
                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-main duration-100 dark:text-white">
                {{ $k->judul }}
            </h5>
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
                    <p>{{ number_format($k->jml_pelanggan, 0, ',', '.') }} Orang</p>
                </div>
            </div>
        </div>
    </a>
@endforeach


{{-- <a href="/kelas"
    class="flex flex-col items-center bg-white rounded-3xl overflow-hidden shadow md:flex-row duration-500 group hover:scale-105 hover:ring-2 hover:ring-red-400 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover rounded-t-lg h-full w-[40%] md:rounded-none md:rounded-l-lg" src="img/kelas2.jpg"
        alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-main duration-100 dark:text-white">
            Pengolahan
            Sampah Organik
        </h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kelas ini fokus pada pengolahan sampah
            organik, termasuk sisa makanan dan bahan organik lainnya.</p>
        <div class="flex gap-5 fill-gray-700 text-gray-700">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path
                        d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
                <p>2 Jam</p>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <p>1.348 Orang</p>
            </div>
        </div>
    </div>
</a>
<a href="kelas"
    class="flex flex-col items-center bg-white rounded-3xl overflow-hidden shadow md:flex-row duration-500 group hover:scale-105 hover:ring-2 hover:ring-red-400 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover rounded-t-lg h-full w-[40%] md:rounded-none md:rounded-l-lg" src="img/kelas3.jpg"
        alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-main duration-100 dark:text-white">
            Pengolahan Sampah Plastik</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kelas ini membahas masalah serius sampah
            plastik dan bagaimana kita dapat mengatasi masalah ini.</p>
        <div class="flex gap-5 fill-gray-700 text-gray-700">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path
                        d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
                <p>6 Jam</p>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <p>1.923 Orang</p>
            </div>
        </div>
    </div>
</a>
<a href="/kelas"
    class="flex flex-col items-center bg-white rounded-3xl overflow-hidden shadow md:flex-row duration-500 group hover:scale-105 hover:ring-2 hover:ring-red-400 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover rounded-t-lg h-full w-[40%] md:rounded-none md:rounded-l-lg" src="img/kelas4.jpg"
        alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-main duration-100 dark:text-white">
            Pengolahan Sampah Elektronik</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kelas ini berfokus pada pengolahan sampah
            elektronik, yang melibatkan perangkat dan peralatan elektronik.</p>
        <div class="flex gap-5 fill-gray-700 text-gray-700">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path
                        d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
                <p>3 Jam</p>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path
                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                </svg>
                <p>1.123 Orang</p>
            </div>
        </div>
    </div>
</a> --}}
