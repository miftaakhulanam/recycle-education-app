@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Tambah Kelas Baru</h3>
            <div class="w-[80%]">
                <form method="POST" action="/dashboard/kelas" enctype="multipart/form-data">
                    @csrf
                    <div class="my-5">
                        <label for="judul"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Judul</label>
                        <input type="text" id="judul" name="judul"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('judul') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" autofocus value="{{ old('judul') }}">
                        @error('judul')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="slug"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Slug</label>
                        <input type="text" id="slug" name="slug"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('slug') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('slug') }}">
                        @error('slug')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="kategori"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Kategori</label>
                        <select id="kategori" name="kategori_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full selection:bg-main focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                            @foreach ($kategori as $k)
                                @if (old('kategori_id') == $k->id)
                                    <option value="{{ $k->id }}" class="selection:text-main hover:bg-main" selected>
                                        {{ $k->nama }}
                                    </option>
                                @else
                                    <option value="{{ $k->id }}" class="selection:text-main hover:bg-main">
                                        {{ $k->nama }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="my-5">
                        <label for="harga"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Harga</label>
                        <input type="number" id="harga" name="harga"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('harga') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('harga') }}">
                        @error('harga')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="wahtu" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Waktu
                            Pengerjaan(jam)</label>
                        <input type="number" id="waktu" name="waktu_pengerjaan"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('waktu_pengerjaan') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required value="{{ old('waktu_pengerjaan') }}" autocomplete="off">
                        @error('waktu_pengerjaan')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5 text-decoration-none">
                        <label for="deskripsi"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Deskripsi</label>
                        @error('deskripsi')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}" required>
                        <trix-editor id="deskripsi" input="deskripsi" class="trix-editor bg-white rounded-xl"></trix-editor>
                    </div>
                    <div class="my-5">
                        <label for="gambar"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Gambar</label>
                        <img class="img-preview img-fluid mb-3 w-1/3">
                        <label for="gambar"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 rounded-xl cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                        to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="gambar" type="file" name="gambar" class="hidden" onchange="previewImage()" />
                        </label>
                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="judul1" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Judul
                            Materi 1</label>
                        <input type="text" id="judul1" name="judul1"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5  @error('judul1') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required value="{{ old('judul1') }}" autocomplete="off">
                        @error('judul1')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5 text-decoration-none">
                        <label for="materi1" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Materi
                            1</label>
                        @error('materi1')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input id="materi1" type="hidden" name="materi1" value="{{ old('materi1') }}" required>
                        <trix-editor id="materi1" input="materi1"
                            class="trix-editor bg-white rounded-xl"></trix-editor>
                    </div>
                    <div class="my-5">
                        <label for="judul2" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Judul
                            Materi 2</label>
                        <input type="text" id="judul2" name="judul2"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('judul2') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required value="{{ old('judul2') }}" autocomplete="off">
                        @error('judul2')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5 text-decoration-none">
                        <label for="materi2" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Materi
                            2</label>
                        @error('materi2')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input id="materi2" type="hidden" name="materi2" value="{{ old('materi2') }}" required>
                        <trix-editor id="materi2" input="materi2"
                            class="trix-editor bg-white rounded-xl"></trix-editor>
                    </div>
                    <div class="my-5">
                        <label for="judul3" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Judul
                            Materi 3</label>
                        <input type="text" id="judul3" name="judul3"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('judul3') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required value="{{ old('judul3') }}" autocomplete="off">
                        @error('judul3')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5 text-decoration-none">
                        <label for="materi3" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Materi
                            3</label>
                        @error('materi3')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input id="materi3" type="hidden" name="materi3" value="{{ old('materi3') }}" required>
                        <trix-editor id="materi3" input="materi3" class="trix-editor bg-white rounded-xl"
                            required></trix-editor>
                    </div>
                    <div class="my-5">
                        <label for="soal" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Soal
                            Kuis</label>
                        <input type="text" id="soal" name="soal1"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal1') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal1') }}">
                        @error('soal1')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal2"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal2') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal2') }}">
                        @error('soal2')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal3"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal3') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal3') }}">
                        @error('soal3')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal4"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal4') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal4') }}">
                        @error('soal4')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal5"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal5') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal5') }}">
                        @error('soal5')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal6"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal6') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal6') }}">
                        @error('soal6')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal7"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal7') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal7') }}">
                        @error('soal7')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                        <input type="text" id="soal" name="soal8"
                            class="bg-gray-50 border mb-8 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('soal8') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('soal8') }}">
                        @error('soal8')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex gap-3 w-full">
                        <button type="submit"
                            class="flex w-max px-5 py-2 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Buat
                            Kelas</button>
                        <a href="/dashboard/kelas"
                            class="flex w-max px-5 py-2 mb-8 bg-gray-500 text-white rounded-full hover:bg-gray-600 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/dashboard/kelas/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // })

        function previewImage() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
