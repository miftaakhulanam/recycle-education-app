{{-- @dd(request('page')) --}}
<div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen"
    class="fixed inset-y-0 left-0 z-10 flex-shrink-0  w-64 max-h-max sm:left-16 sm:w-72 lg:static lg:w-80">
    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main"
        class="fixed bg-white flex flex-col h-full border-r-2 -ml-16 border-indigo-100 w-64 sm:left-16 sm:w-72 lg:w-80">

        <!-- Links -->
        <div class="flex-1 px-4 mt-20 space-y-3 overflow-hidden hover:overflow-auto">
            @foreach ($materi as $m)
                @if (!request('page') && $title !== 'Kuis')
                    <a href="/modul/{{ $modul->slug }}/?page={{ $m->page }}"
                        class="flex items-center {{ $m->page == '1' ? 'bg-main text-white hover:bg-red-800' : '' }} space-x-2 text-gray-500 font-poppins font-medium text-base transition-colors rounded-lg hover:bg-gray-200">
                        <span aria-hidden="true" class="p-2 transition-colors rounded-lg">
                            <svg class="w-6 h-6 {{ $m->page == '1' ? 'fill-white' : '' }} fill-gray-500 group-hover:fill-white"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </span>
                        <span>{{ $m->nama }}</span>
                    </a>
                @else
                    <a href="/modul/{{ $modul->slug }}/?page={{ $m->page }}"
                        class="flex items-center {{ request('page') == $m->page ? 'bg-main text-white hover:bg-red-800' : '' }} space-x-2 text-gray-500 font-poppins font-medium text-base transition-colors rounded-lg hover:bg-gray-200">
                        <span aria-hidden="true" class="p-2 transition-colors rounded-lg">
                            <svg class="w-6 h-6 {{ request('page') == $m->page ? 'fill-white' : '' }} fill-gray-500 group-hover:fill-white"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </span>
                        <span>{{ $m->nama }}</span>
                    </a>
                @endif
            @endforeach

            <a href="/kuis/{{ $modul->slug }}"
                class="flex items-center {{ $title == 'Kuis' ? 'bg-main text-white hover:bg-red-800' : '' }} space-x-2  text-gray-500 transition-colors rounded-lg group font-poppins font-medium text-base hover:bg-gray-200">
                <span aria-hidden="true" class="p-2 ml-1 transition-colors rounded-lg">
                    <svg class="w-6 h-6 {{ $title == 'Kuis' ? 'fill-white' : '' }} fill-gray-500"
                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V299.6l-94.7 94.7c-8.2 8.2-14 18.5-16.8 29.7l-15 60.1c-2.3 9.4-1.8 19 1.4 27.8H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
                    </svg>
                </span>
                <span>Kuis</span>
            </a>
        </div>
    </nav>

</div>
