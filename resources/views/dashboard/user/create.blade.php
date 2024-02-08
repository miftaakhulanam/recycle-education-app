@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Tambah User Baru</h3>
            <div class="w-[80%]">
                <form method="POST" action="/dashboard/member" enctype="multipart/form-data">
                    @csrf
                    <div class="my-5">
                        <label for="username"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="username"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('username') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" autofocus value="{{ old('username') }}">
                        @error('username')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="email"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('email') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="password"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('password') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            required autocomplete="off" value="{{ old('password') }}">
                        @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="is_admin"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Role</label>
                        <select id="is_admin" name="is_admin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full selection:bg-main focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                            <option value="member" {{ old('is_admin') === 'member' ? 'selected' : '' }}>
                                Member
                            </option>
                            <option value="admin" {{ old('is_admin') === 'admin' ? 'selected' : '' }}>
                                Admin
                            </option>
                        </select>

                    </div>
                    <div class="my-5">
                        <label for="telepon"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Telepon</label>
                        <input type="text" id="telepon" name="telepon"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('telepon') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            autocomplete="off" value="{{ old('telepon') }}">
                        @error('telepon')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="alamat"
                            class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Alamat</label>
                        <textarea type="text" id="alamat" name="alamat" cols="30" rows="10"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('alamat') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            autocomplete="off" value="{{ old('alamat') }}"></textarea>
                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="photo_profil" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Photo
                            profil</label>
                        <img class="img-preview img-fluid mb-3 w-1/3">
                        <label for="photo_profil"
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
                            <input id="photo_profil" type="file" name="photo_profil" class="hidden"
                                onchange="previewImage()" />
                        </label>
                        @error('photo_profil')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex gap-3 w-full">
                        <button type="submit"
                            class="flex w-max px-5 py-2 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Tambah
                            User</button>
                        <a href="/dashboard/member"
                            class="flex w-max px-5 py-2 mb-8 bg-gray-500 text-white rounded-full hover:bg-gray-600 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </main>

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
