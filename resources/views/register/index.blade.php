@extends('layouts.main2')

@section('container')
    <section class="font-poppins bg-center bg-no-repeat" style="background-image: url('img/bg2.jpg')">
        <div class="h-screen flex justify-center items-center backdrop-filter backdrop-blur-3xl bg-opacity-100">
            <div class="container mx-auto">
                <div class="flex justify-center items-center">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-2xl rounded-lg overflow-hidden">
                        <!-- Col -->
                        <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-l-lg bg-center"
                            style="background-image: url('../img/login.jpeg')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5">
                            <h3 class="pt-4 text-2xl text-center">Register now!</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="/register" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                        Username
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-full shadow appearance-none focus:ring-transparent focus:border-transparent focus:shadow-2xl focus:shadow-main @error('username') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                                        id="username" name="username" type="text" placeholder="Masukkan username anda"
                                        required value="{{ old('username') }}" />
                                    @error('username')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Email
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded-full shadow appearance-none focus:ring-transparent focus:border-transparent focus:shadow-2xl focus:shadow-main @error('email') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                                        id="email" name="email" type="email" placeholder="Masukkan email anda"
                                        required value="{{ old('email') }}" />
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Password
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded-full shadow appearance-none focus:ring-transparent focus:border-transparent focus:shadow-2xl focus:shadow-main @error('password') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                                        id="password" name="password" type="password" placeholder="••••••••" required />
                                    @error('password')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-main rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Daftar
                                    </button>
                                </div>
                                <hr class="mb-6 border-t" />
                                <div class="text-center">
                                    <div class="mt-12 text-sm text-center">
                                        Sudah punya akun? <a class="cursor-pointer text-main hover:underline"
                                            href="/login">Masuk
                                            sekarang</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
