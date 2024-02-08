@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <div class="w-[80%]">
                <form>
                    <div class="my-5">
                        <img src="{{ asset('storage/' . $kategori->gambar) }}" class="w-80" alt="{{ $kategori->nama }}">
                    </div>
                    <div class="my-5">
                        <label for="nama"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full block w-full p-2.5"
                            disabled value="{{ $kategori->nama }}">
                    </div>
                    <div class="my-5">
                        <label for="slug"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Slug</label>
                        <input type="text" id="slug" name="slug"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full block w-full p-2.5"
                            disabled value="{{ $kategori->slug }}">
                    </div>
                </form>
            </div>

        </div>
    </main>
@endsection
