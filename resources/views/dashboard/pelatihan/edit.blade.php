@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Detail Kelulusan</h3>
            <div class="w-[80%]">
                <form method="POST" action="/dashboard/pelatihan/{{ $pelatihan->id }}">
                    @method('put')
                    @csrf
                    <div class="my-5">
                        <label for="serial_number" class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Serial
                            Number</label>
                        <input type="text" id="serial_number" name="serial_number"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('serial_number') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            disabled value="{{ $pelatihan->serial_number }}">
                    </div>
                    <div class="my-5">
                        <label for="nama"
                            class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 @error('nama') invalid:ring-red-600 invalid:border-red-600 invalid:placeholder:text-red-600 @enderror"
                            disabled value="{{ $pelatihan->user->username }}">
                    </div>
                    <div class="my-5">
                        <h1 class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Jawaban</h1>
                        @foreach ($jawaban as $j)
                            <label for="serial_number"
                                class="block mb-3 text-base font-light text-gray-900 dark:text-white">{{ $j->pertanyaan->pertanyaan }}</label>
                            <input type="text" id="serial_number" name="serial_number"
                                class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 mb-3"
                                value="{{ $j->jawaban }}" disabled>
                        @endforeach
                    </div>
                    <div class="my-5">
                        <label for="status_lulus"
                            class="block mb-3 text-lg font-normal text-gray-900 dark:text-white">Status</label>
                        <select id="status_lulus" name="status_lulus"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full selection:bg-main focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                            <option value="lulus"
                                {{ old('status_lulus', $pelatihan->status_lulus) === 'lulus' ? 'selected' : '' }}>
                                LULUS
                            </option>
                            <option value="tidak_lulus"
                                {{ old('status_lulus', $pelatihan->status_lulus) === 'tidak_lulus' ? 'selected' : '' }}>
                                TIDAK LULUS
                            </option>
                        </select>
                    </div>


                    <div class="flex gap-3 w-full">
                        <button type="submit"
                            class="flex w-max px-5 py-2 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Submit</button>
                        <a href="/dashboard/pelatihan"
                            class="flex w-max px-5 py-2 mb-8 bg-gray-500 text-white rounded-full hover:bg-gray-600 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </main>
@endsection
