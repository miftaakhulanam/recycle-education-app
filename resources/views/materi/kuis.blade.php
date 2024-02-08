@extends('modul')

@section('container')
    <section class="font-poppins mt-5">
        <form action="/kuis/{{ $modul->slug }}" method="POST">
            @csrf
            {{-- @foreach ($kuis as $k)
                <div class="mb-8 w-full">
                    <label for="materi1" class="text-lg w-full">{{ $k->pertanyaan }}</label>
                    <input type="text" name="materi1" id="materi1"
                        class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5"
                        required>
                </div>
            @endforeach --}}

            @foreach ($kuis as $key => $p)
                <div class="mb-8 w-full">
                    <input type="hidden" name="pertanyaan_id[]" value="{{ $p->id }}">
                    <label for="jawaban{{ $key + 1 }}" class="text-lg w-full">{{ $p->pertanyaan }}</label>
                    <input type="text" name="jawaban[]" id="jawaban{{ $key + 1 }}"
                        class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5"
                        required autocomplete="off" value="{{ old('jawaban.' . $key) }}">
                </div>
            @endforeach

            <div class="flex justify-between w-full">
                <a href="/modul/{{ $modul->slug }}/?page=3"
                    class="flex w-max px-5 py-2 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Previous</a>
                <button type="submit"
                    class="flex w-max px-5 py-2 mb-8 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Submit</button>
            </div>
        </form>

    </section>
@endsection
