@extends('layouts.main')

@section('container')
    {{-- {{ auth()->user()->email }} --}}
    <section class="py-12 bg-gray-50 relative container font-poppins flex justify-center items-center">
        <a href="/profile"
            class="absolute w-12 h-12 left-24 top-28 flex justify-center items-center bg-transparent border-2 border-main rounded-full hover:bg-main group">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-main group-hover:fill-white" width="22"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="w-[65%] bg-white flex flex-col shadow-xl p-16 rounded-2xl scale-90">
            <h4 class="text-left font-medium text-2xl">Edit Profile</h4>
            <form method="POST" action="/profile/{{ auth()->user()->username }}" enctype="multipart/form-data"
                class="flex flex-col">
                @csrf
                <div class="relative m-8 self-center rounded-full overflow-hidden">
                    <input type="hidden" name="oldImage" value="{{ auth()->user()->photo_profil }}">
                    @if (auth()->user()->photo_profil)
                        <img class="img-preview rounded-full w-48 h-48 object-cover"
                            src="{{ asset('storage/' . auth()->user()->photo_profil) }}"
                            alt="{{ auth()->user()->username }}">
                    @else
                        <img class="img-preview rounded-full w-48" src="../img/profile.png"
                            alt="{{ auth()->user()->username }}">
                    @endif
                    <label for="photo_profil"
                        class="absolute flex justify-center items-center h-12 w-full rounded-b-full bottom-0 bg-black bg-opacity-50 group cursor-pointer">
                        <svg class="fill-gray-200 w-7 group-hover:fill-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                        </svg>
                        <input type="file" name="photo_profil" id="photo_profil" class="hidden"
                            onchange="previewImage()">
                    </label>
                </div>
                @error('photo_profil')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
                <div class="my-4">
                    <label for="username"
                        class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Username</label>
                    <input type="text" id="username" name="username"
                        class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old('username', auth()->user()->username) }}">
                    @error('username')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="email" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old('email', auth()->user()->email) }}">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="telepon"
                        class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Telepon</label>
                    <input type="text" id="telepon" name="telepon"
                        class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old('telepon', auth()->user()->telepon) }}">
                    @error('telepon')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="alamat"
                        class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Alamat</label>
                    <textarea type="text" id="alamat" name="alamat" rows="5"
                        class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-3xl focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('alamat', auth()->user()->alamat) }}
                    </textarea>
                    @error('alamat')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between w-full mt-3">
                    <button type="submit"
                        class="flex w-max px-7 py-3 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Simpan</button>
                </div>
            </form>
        </div>
    </section>

    <script>
        function previewImage() {
            const image = document.querySelector('#photo_profil');
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
