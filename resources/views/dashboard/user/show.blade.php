@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <div class="w-[80%]">
                <div class="my-5">
                    @if (isset($user->photo_profil))
                        <img src="{{ asset('storage/' . $user->photo_profil) }}" class="img-fluid mb-3 w-1/3 block">
                    @else
                        <img src="{{ asset('img/profile.png') }}" class="img-fluid mb-3 w-1/3 block">
                    @endif
                </div>
                <div class="my-5">
                    <label for="username"
                        class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Username</label>
                    <input type="text" id="username" name="username"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        value="{{ $user->username }}" disabled>
                </div>
                <div class="my-5">
                    <label for="email" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        value="{{ $user->email }}" disabled>
                </div>
                <div class="my-5">
                    <label for="is_admin" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Role</label>
                    <input type="text" id="is_admin" name="is_admin"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        value="{{ $user->is_admin }}" disabled>
                </div>
                <div class="my-5">
                    <label for="telepon"
                        class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Telepon</label>
                    <input type="text" id="telepon" name="telepon"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                        value="{{ $user->telepon }}" disabled>
                </div>
                <div class="my-5">
                    <label for="alamat" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Alamat</label>
                    <textarea type="text" id="alamat" name="alamat" cols="30" rows="10" disabled
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-red-500 focus:border-red-500 block w-full p-2.5">{{ $user->alamat }}</textarea>
                </div>

            </div>
        </div>
    </main>
@endsection
