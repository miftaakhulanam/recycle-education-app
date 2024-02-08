@extends('dashboard.layouts.main')

@section('container')
    <style>
        trix-toolbar {
            display: none;
        }
    </style>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <div class="w-[80%]">
                <div class="my-5">
                    <img src="{{ asset('storage/' . $kelas->gambar) }}" class="img-preview img-fluid mb-3 w-1/3 block">
                </div>
                <div class="my-5">
                    <label for="judul" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Judul</label>
                    <input type="text" id="judul" name="judul"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        disabled value="{{ $kelas->judul }}">
                </div>
                <div class="my-5">
                    <label for="slug" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" name="slug"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        disabled value="{{ old('slug', $kelas->slug) }}">
                </div>
                <div class="my-5">
                    <label for="kategori"
                        class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Kategori</label>
                    <input type="text"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        disabled value="{{ $kelas->kategori->nama }}">
                </div>
                <div class="my-5">
                    <label for="harga" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Harga</label>
                    <input type="number" id="harga" name="harga"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        disabled value="{{ $kelas->harga }}">
                </div>
                <div class="my-5">
                    <label for="wahtu" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Waktu
                        Pengerjaan(jam)</label>
                    <input type="number" id="waktu" name="waktu_pengerjaan"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        disabled value="{{ $kelas->waktu_pengerjaan }}">
                </div>
                <div class="my-5 text-decoration-none">
                    <label for="deskripsi"
                        class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Deskripsi</label>
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $kelas->deskripsi) }}">
                    <trix-editor id="deskripsi" input="deskripsi" class="trix-editor bg-white rounded-xl"
                        disabled></trix-editor>
                </div>

                @foreach ($materis as $index => $materi)
                    <div class="my-5">
                        <label for="judul{{ $index + 1 }}"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">
                            Judul Materi {{ $index + 1 }}
                        </label>
                        <input type="text" id="judul{{ $index + 1 }}" name="judul{{ $index + 1 }}"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                            disabled value="{{ $materi->nama }}">
                    </div>

                    <div class="my-5 text-decoration-none">
                        <label for="materi{{ $index + 1 }}"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">
                            Materi {{ $index + 1 }}
                        </label>
                        <input id="materi{{ $index + 1 }}" type="hidden" name="materi{{ $index + 1 }}"
                            value="{{ $materi->body }}">
                        <trix-editor id="materi{{ $index + 1 }}" input="materi{{ $index + 1 }}"
                            class="trix-editor bg-white rounded-xl"></trix-editor>
                    </div>
                @endforeach


                <div class="my-5">
                    <label for="soal" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Soal
                        Kuis</label>

                    @foreach ($pertanyaans as $index => $pertanyaan)
                        <input type="text" id="soal" name="soal{{ $index + 1 }}"
                            class="bg-gray-50 border mb-5 font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                            disabled value="{{ $pertanyaan->pertanyaan }}">
                    @endforeach
                </div>

            </div>
        </div>
    </main>

    <script>
        // Mendapatkan semua elemen trix-editor
        const trixEditors = document.querySelectorAll('trix-editor');

        // Mengatur atribut contentEditable menjadi false untuk setiap editor
        trixEditors.forEach(editor => {
            editor.editor.element.setAttribute('contentEditable', false);
        });
    </script>
@endsection
