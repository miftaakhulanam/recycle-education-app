@extends('layouts.main')

@section('container')
    {{-- {{ auth()->user()->email }} --}}
    <section class="py-12 bg-gray-50 relative container font-poppins flex justify-center items-center">

        {{-- flash message --}}
        @if (session()->has('success'))
            <button data-modal-toggle="popup-modal2" class="hidden">
            </button>
            <div id="popup-modal2" tabindex="-1"
                class="absolute animate-bounce z-[9999] flex items-center border-b-4 border-green-500 top-3 w-max p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
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
                    data-modal-hide="popup-modal2">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif


        <a href="/"
            class="absolute w-12 h-12 left-24 top-28 flex justify-center items-center bg-transparent border-2 border-main rounded-full hover:bg-main group">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-main group-hover:fill-white" width="22"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="w-[65%] bg-white flex flex-col shadow-xl p-16 rounded-2xl scale-90">
            <h4 class="text-left font-medium text-2xl">Profil pengguna</h4>
            <div class="relative m-8 self-center">
                @if (auth()->user()->photo_profil)
                    <img class="rounded-full w-48" src="{{ asset('storage/' . auth()->user()->photo_profil) }}"
                        alt="{{ auth()->user()->username }}">
                @else
                    <img class="rounded-full w-48" src="../img/profile.png" alt="{{ auth()->user()->username }}">
                @endif
                <a href="/profile/edit" data-tooltip-target="tooltip-default"
                    class="absolute flex justify-center items-center right-2 bottom-3 w-11 h-11 border-4 bg-main border-white rounded-full hover:bg-red-800">
                    <svg class="fill-white w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                    </svg>
                </a>
                <div id="tooltip-default" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-black transition-opacity duration-300 bg-gray-200 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Edit Profile
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <div class="my-4">
                <label for="username" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Username</label>
                <input type="text" id="username" name="username"
                    class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled value="{{ auth()->user()->username }}">
            </div>
            <div class="my-4">
                <label for="email" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled value="{{ auth()->user()->email }}">
            </div>
            <div class="my-4">
                <label for="telepon" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Telepon</label>
                <input type="text" id="telepon" name="telepon"
                    class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled value="{{ auth()->user()->telepon }}">
            </div>
            <div class="my-4">
                <label for="alamat" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Alamat</label>
                <textarea type="text" id="alamat" name="alamat" rows="5"
                    class="bg-gray-50 border font-light border-gray-300 text-black text-base rounded-3xl focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    disabled>{{ auth()->user()->alamat }}
                    </textarea>
            </div>
        </div>
    </section>
@endsection
