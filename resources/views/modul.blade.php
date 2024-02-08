<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Red App | {{ $title }}</title>
</head>

<body>
    <!-- component -->

    <div class="absolute flex justify-center items-center w-full top-3 right-0 z-[999]">
        @if (session()->has('success'))
            <button data-modal-toggle="popup-modal" class="hidden">
            </button>
            <div id="popup-modal" tabindex="-1"
                class="absolute animate-bounce flex items-center border-b-4 border-green-500 top-3 w-max p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-modal-hide="popup-modal">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex h-screen antialiased text-gray-900">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center bg-slate-600 bg-opacity-50 justify-center text-2xl font-semibold text-white">
                Loading.....
            </div>

            <!-- Sidebar -->
            <div class="flex flex-shrink-0 transition-all">
                <div x-show="isSidebarOpen" @click="isSidebarOpen = true"
                    class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
                <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>


                <!-- Left mini bar -->
                <nav aria-label="Options"
                    class="absolute z-20 flex-col items-center flex-shrink-0 hidden w-16 m-1 bg-transparent shadow-md sm:flex rounded-tr-3xl rounded-br-3xl">

                    <div class="fixed flex flex-col items-center flex-1 p-2 space-y-4">
                        <!-- Menu button -->
                        <button
                            @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                            class="p-2 rounded-full border-2 border-main bg-main fill-main transition-all focus:outline-none"
                            :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ?
                            'fill-white bg-main transition-all rotate-180 duration-300' :
                            'text-main bg-transparent hover:bg-main hover:fill-white'">
                            <span class="sr-only">Toggle sidebar</span>
                            <svg aria-hidden="true" class="w-6 h-6" stroke="currentColor" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </button>
                    </div>
                </nav>

                @include('partials.sidebar')
            </div>
            <div class="flex flex-col flex-1">
                <header
                    class="fixed flex bg-white items-center justify-center flex-shrink-0 p-5 right-0 left-0 shadow-lg">
                    <!-- Mobile sub header -->
                    <div x-transition:enter="transform transition-transform"
                        x-transition:enter-start="translate-y-full opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transform transition-transform"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-full opacity-0" x-show="isSubHeaderOpen"
                        @click.away="isSubHeaderOpen = false"
                        class="absolute flex items-center justify-between p-2 bg-white rounded-md shadow-lg sm:hidden top-16 left-5 right-5">
                        <!-- Seetings button -->

                    </div>
                    <p class="text-xl font-medium text-gray-500">{{ $title . ' - ' . $modul->nama }}</p>
                </header>

                <div class="flex justify-center">
                    <!-- Main -->
                    <main class="px-48 pt-24 w-full flex flex-col justify-center">

                        <!-- Content -->
                        @yield('container')


                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSettingsPanelOpen: false,
                isSubHeaderOpen: false,
                watchScreen() {
                    if (window.innerWidth <= 1024) {
                        this.isSidebarOpen = false
                    }
                },
            }
        }
    </script>
</body>

</html>
