@extends('modul')

@section('container')
    @foreach ($body as $b)
        <div class="text-lg text-justify">
            {!! $b->body !!}
        </div>
    @endforeach

    {{ $body->links('pagination::simple-tailwind', ['modul' => $modul]) }}
@endsection
