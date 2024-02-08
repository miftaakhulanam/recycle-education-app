<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-main">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

        @if (Request::is('dashboard'))
        @else
            <div class="relative mx-4 lg:mx-0">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>

                <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-red-600 focus:ring-red-600"
                    type="text" placeholder="Search">
            </div>
        @endif


    </div>

    <div class="flex items-center">
        <div x-data="{ notificationOpen: false }" class="relative">
            <button @click="notificationOpen = ! notificationOpen"
                class="flex me-6 text-gray-600 group focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 fill-gray-600 group-hover:fill-main"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path
                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112v25.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V208c0-61.9 50.1-112 112-112zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                </svg>
            </button>

            <div x-cloak x-show="notificationOpen" @click="notificationOpen = false"
                class="fixed inset-0 z-10 w-full h-full"></div>

            <div x-cloak x-show="notificationOpen"
                class="absolute right-0 z-10 mt-2 border flex items-center justify-center border-gray-200 font-poppins overflow-hidden bg-white rounded-lg shadow-xl w-80"
                style="width:20rem; height:15rem;">
                <p class="text-gray-500 font-normal">Tidak ada notifikasi</p>

            </div>
        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button type="button" class="flex text-sm bg-transparent rounded-full md:me-0 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>

                @if (auth()->user()->photo_profil)
                    <img class="w-9 h-9 border-2 border-transparent rounded-full ring-2 ring-red-600 dark:ring-gray-500"
                        src="{{ asset('storage/' . auth()->user()->photo_profil) }}"
                        alt="{{ auth()->user()->username }}">
                @else
                    <img class="w-9 h-9 border-2 border-transparent rounded-full ring-2 ring-red-600 dark:ring-gray-500"
                        src="{{ asset('img/profile.png') }}" alt="{{ auth()->user()->username }}">
                @endif
            </button>

            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 -right-32 border border-gray-200 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <ul class="py-2 w-40" aria-labelledby="user-menu-button">
                    <li>
                        <a href="/"
                            class="inline-block text-left w-full ps-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Halaman
                            Utama</a>
                    </li>
                    <li>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="inline-block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                            type="button">
                            Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
