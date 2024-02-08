@if ($paginator->hasPages())
    <ul class="flex list-none justify-between my-8 text-lg w-full">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="mr-2 disabled" aria-disabled="true">
                {{-- <span class="block px-3 py-2 bg-gray-300 text-gray-600 rounded-md">Previous</span> --}}
            </li>
        @else
            <li class="mr-2">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="block px-4 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Previous</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="block px-5 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Next</a>
            </li>
        @else
            <li>
                <a href="/kuis/{{ $modul->slug }}"
                    class="block px-5 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red active:bg-red-800 transition duration-150 ease-in-out">Next</a>
            </li>
        @endif
    </ul>
@endif
