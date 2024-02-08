@extends('layouts.main2')

@section('container')
    <section class="font-poppins bg-center bg-no-repeat" style="background-image: url('img/bg2.jpg')">
        <div class="h-screen flex justify-center items-center backdrop-filter backdrop-blur-3xl bg-opacity-100">

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

            @if (session()->has('loginError'))
                <button data-modal-toggle="popup-modal" class="hidden">
                </button>
                <div id="popup-modal" tabindex="-1"
                    class="absolute animate-bounce flex items-center top-3 w-full border-b-4 border-red-500 max-w-sm p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="mx-3 text-sm font-normal">{{ session('loginError') }}</div>
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

            <div class="container mx-auto">
                <div class="flex justify-center items-center">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-2xl rounded-lg overflow-hidden">
                        <!-- Col -->
                        <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-l-lg bg-center"
                            style="background-image: url('../img/login.jpeg')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5">
                            <h3 class="pt-4 text-2xl text-center">Please login!</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="/login" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Email
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-full shadow appearance-none focus:ring-transparent focus:border-transparent focus:shadow-2xl focus:shadow-main  @error('username') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                                        id="email" name="email" type="text" placeholder="Masukkan email anda"
                                        autofocus required value="{{ old('email') }}" />
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Password
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded-full shadow appearance-none focus:ring-transparent focus:border-transparent focus:shadow-2xl focus:shadow-main"
                                        id="password" name="password" type="password" placeholder="••••••••" required />
                                </div>
                                <div class="mb-4">
                                    <input id="checkbox_id" type="checkbox" value="1"
                                        class="w-4 h-4 mr-2 text-red-600 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-red-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                    <label class="text-sm" for="checkbox_id">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-main rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Log In
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <div class="mt-12 text-sm text-center">
                                        Belum punya akun? <a class="cursor-pointer text-main hover:underline"
                                            href="/register">Ayo
                                            daftar</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a class="inline-block text-main text-sm align-baseline hover:underline"
                                        href="#">
                                        Forgot Password?
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
