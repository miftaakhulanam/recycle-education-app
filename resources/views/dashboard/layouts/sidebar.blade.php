<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-800 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" class="w-8 h-8" alt="">

            <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
        </div>
    </div>
    <nav class="mt-10 text-gray-500">
        <a class="flex items-center px-6 py-2 mt-4 hover:bg-gray-700 hover:bg-opacity-80 hover:text-gray-100 group {{ Request::is('dashboard') ? 'text-gray-100 bg-gray-700 bg-opacity-80' : '' }}"
            href="/dashboard">
            <svg class="w-6 h-6 group-hover:fill-gray-100 {{ Request::is('dashboard') ? 'fill-gray-100' : '' }}"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 hover:bg-gray-700 hover:bg-opacity-80 hover:text-gray-100 group fill-gray-500  {{ Request::is('dashboard/kelas*') ? 'text-gray-100 bg-gray-700 bg-opacity-80' : '' }}"
            href="/dashboard/kelas">
            <svg class="w-6 h-6 group-hover:fill-gray-100 {{ Request::is('dashboard/kelas*') ? 'fill-gray-100' : '' }}"
                xmlns="http://www.w3.org/2000/svg" color="currentColor"
                viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M96 32C60.7 32 32 60.7 32 96V384H96V96l384 0V384h64V96c0-35.3-28.7-64-64-64H96zM224 384v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H416V384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32z" />
            </svg>

            <span class="mx-3">Kelas</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 hover:bg-gray-700 hover:bg-opacity-80 hover:text-gray-100 group fill-gray-500  {{ Request::is('dashboard/kategori*') ? 'text-gray-100 bg-gray-700 bg-opacity-80' : '' }}"
            href="/dashboard/kategori">
            <svg class="w-6 h-6 group-hover:fill-gray-100 {{ Request::is('dashboard/kategori*') ? 'fill-gray-100' : '' }}"
                xmlns="http://www.w3.org/2000/svg" color="currentColor"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
            </svg>

            <span class="mx-3">Kategori</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 hover:bg-gray-700 hover:bg-opacity-80 hover:text-gray-100 group fill-gray-500  {{ Request::is('dashboard/member*') ? 'text-gray-100 bg-gray-700 bg-opacity-80' : '' }}"
            href="/dashboard/member">
            <svg class="w-6 h-6 group-hover:fill-gray-100 {{ Request::is('dashboard/member*') ? 'fill-gray-100' : '' }}"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
            </svg>

            <span class="mx-3">User</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 hover:bg-gray-700 hover:bg-opacity-80 hover:text-gray-100 group fill-gray-500  {{ Request::is('dashboard/pelatihan*') ? 'text-gray-100 bg-gray-700 bg-opacity-80' : '' }}"
            href="/dashboard/pelatihan">
            <svg class="w-6 h-6 group-hover:fill-gray-100 {{ Request::is('dashboard/pelatihan*') ? 'fill-gray-100' : '' }}"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
            </svg>

            <span class="mx-3">Pelatihan</span>
        </a>
    </nav>
</div>
