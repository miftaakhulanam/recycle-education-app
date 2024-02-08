<nav class="backdrop-filter backdrop-blur-xl dark:bg-gray-900 fixed w-full z-50 top-0 left-0">
    <div class="md:container px-4 flex flex-wrap items-center justify-between mx-auto py-4">
        <div class="flex items-center">
            <img src="../img/logo.png" class="h-9 mr-3" alt="Red App">
        </div>
        <div class="flex md:order-2 font-poppins">
            @auth
                <button type="button" class="flex text-sm bg-transparent rounded-full md:me-0 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>

                    @if (auth()->user()->photo_profil)
                        <img class="w-10 h-10 border-2 border-transparent rounded-full ring-2 ring-red-600 dark:ring-gray-500"
                            src="{{ asset('storage/' . auth()->user()->photo_profil) }}"
                            alt="{{ auth()->user()->username }}">
                    @else
                        <img class="w-10 h-10 border-2 border-transparent rounded-full ring-2 ring-red-600 dark:ring-gray-500"
                            src="../img/profile.png" alt="{{ auth()->user()->username }}">
                    @endif

                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->username }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/profile"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        @can('admin')
                            <li>
                                <a href="/dashboard"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endcan
                        <li>
                            {{-- <button
                                class="inline-block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</button>
 --}}
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="inline-block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                type="button">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            @else
                <a href="/login">
                    <button type="button"
                        class="text-main bg-transparent border-2 border-main box-border hover:bg-main hover:text-white font-medium rounded-full text-base px-4 py-2 text-center mr-3 md:mr-0 dark:bg-main dark:hover:bg-main dark:focus:ring-main">Log
                        In</button>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            @endauth
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 gap-6 font-normal bg-white md:bg-transparent font-poppins text-lg border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/#home"
                        class="block py-2 pl-3 pr-4 bg-main rounded md:bg-transparent md:text-gray-800 md:hover:text-main md:p-0 md:dark:text-main"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/#about"
                        class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-main  md:p-0 md:dark:hover:text-main dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="/#kelas"
                        class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-main md:p-0 md:dark:hover:text-main dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Red</a>
                </li>
                <li>
                    <a href="/#pelatihan"
                        class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-main md:p-0 md:dark:hover:text-main dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pelatihan</a>
                </li>
                <li>
                    <a href="/#kontak"
                        class="block py-2 pl-3 pr-4 text-gray-800 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-main md:p-0 md:dark:hover:text-main dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
