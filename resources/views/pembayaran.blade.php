{{-- @dd($kelas->modul) --}}
@extends('layouts.main2')

@section('container')
    <div class="absolute flex justify-center items-center w-full top-3 right-0">
        @if (session()->has('success'))
            <div id="popup-modal" tabindex="-1" class="hidden">
                <button data-modal-toggle="popup-modal" class="hidden">
                </button>
                <div
                    class="animate-bounce flex items-center border-b-4 border-green-500 top-3 w-max p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
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
            </div>
        @endif

        @if (session()->has('errorPayment'))
            <div id="popup-modal" tabindex="-1" class="hidden">
                <button data-modal-toggle="popup-modal" class="hidden">
                </button>
                <div
                    class="animate-bounce flex items-center w-full border-b-4 border-red-500 max-w-sm p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                        </svg>
                        <span class="sr-only">Error icon</span>
                    </div>
                    <div class="mx-3 text-sm font-normal">{{ session('errorPayment') }}</div>
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
            </div>
        @endif
    </div>
    <form action="/pembayaran/{{ $kelas->slug }}" method="POST" class="h-full bg-slate-100">
        @csrf
        <section class="flex flex-row gap-6 p-10 font-poppins">
            <div class="w-[60%] p-9 rounded-3xl shadow-xl bg-white">
                <h1 class="text-3xl font-medium mb-10">Pembayaran Pelatihan</h1>
                <p class="text-xl">Informasi Pelanggan</p>
                <div class="my-5">
                    <label for="email" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: reza@gmail.com" required autocomplete="off"
                        value="{{ auth()->user()->email }}">
                </div>
                <p class="text-xl mt-12">Nama dan Nomor Whatsapp</p>
                <div class="my-5">
                    <label for="username" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="username" name="username"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: Reza Ramadhan" required autocomplete="off"
                        value="{{ auth()->user()->username }}">
                </div>
                <div class="my-5">
                    <label for="telepon" class="block mb-3 text-lg font-light text-gray-900 dark:text-white">Nomor
                        Whatsapp</label>
                    <input type="text" id="telepon" name="telepon"
                        class="bg-gray-50 border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Contoh: 085624xxxxxx" required autocomplete="off"
                        value="{{ auth()->user()->telepon }}">
                </div>
                <p class="text-base mt-10 font-light text-gray-500"><span class="font-semibold">Note:</span> Pastikan nama
                    yang
                    kamu
                    masukkan adalah benar. Sebab kami
                    akan gunakan data tersebut untuk informasi disertifikat setelah lulus nantinya.</p>
            </div>
            <div class="w-[40%] p-9 rounded-3xl shadow-xl h-min bg-white">
                <div class="flex flex-row gap-5 mb-6">
                    <img src="{{ asset('storage/' . $kelas->gambar) }}" class="w-36 rounded-xl" alt="gambar 1">
                    <div>
                        <p class="text-lg font-normal text-gray-900 my-2">{{ $kelas->judul }}</p>
                        <p class="text-base font-normal text-gray-500">Kategori: {{ $kelas->kategori->nama }}</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <input type="text" id="kodePromo"
                        class="bg-gray-50 w-full border font-light border-gray-300 text-gray-900 text-sm rounded-full focus:ring-red-500 focus:border-red-500 block p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Kode Kupon (Jika ada)" value="{{ old('kodePromo') }}">
                    <div onclick="applyPromo()"
                        class="items-center cursor-pointer py-2.5 px-4 ms-2 text-sm font-medium text-white bg-main rounded-full border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Check
                    </div>
                </div>
                <div class="flex flex-row text-base justify-between font-light text-gray-500 py-7">
                    <div class="flex flex-col gap-3">
                        <p>Harga</p>
                        <p>Diskon</p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <p class="text-right">Rp. <span
                                id="hargaAwal">{{ number_format($kelas->harga, 0, ',', '.') }}</span></p>
                        <p class="text-right">(<span id="diskonPersen">0%</span>) Rp. <span id="hargaPotongan">0</span>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="flex flex-row text-base justify-between font-light text-gray-500 py-7">
                    <div>
                        <p>Total</p>
                    </div>
                    <div>
                        <p class="text-right">Rp. <span class="font-semibold text-2xl text-black"
                                id="hargaSetelahDiskon">{{ number_format($kelas->harga, 0, ',', '.') }}</span></p>
                    </div>
                </div>
                {{-- <a href="/modul/{{ $kelas->modul->slug }}"> --}}
                <button type="submit"
                    class="w-full py-2.5 text-lg font-medium text-white bg-main rounded-full border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Checkout
                </button>
                {{-- </a> --}}
            </div>
        </section>
    </form>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function applyPromo() {
            var hargaAwal = parseFloat($('#hargaAwal').text());
            var kodePromo = $('#kodePromo').val();
            var slugKelas = "{{ $kelas->slug }}"; // Ambil slug kelas dari PHP (Blade)

            $.ajax({
                type: 'POST',
                url: '/calculate-discount/' + slugKelas,
                data: {
                    'kode_promo': kodePromo
                },
                success: function(response) {
                    if (response.success) {
                        // Promo berhasil diterapkan
                        $('#hargaSetelahDiskon').text(response.harga_setelah_diskon.toLocaleString('id-ID', {
                            // minimumFractionDigits: 3,
                            // maximumFractionDigits: 3
                        }));
                        $('#diskonPersen').text(response.diskon_persen + '%');
                        $('#hargaPotongan').text(response.harga_potongan.toLocaleString('id-ID', {
                            // minimumFractionDigits: 3,
                            // maximumFractionDigits: 3
                        }));

                        // Set session flash untuk pesan berhasil
                        @if (session('success'))
                            // Menampilkan modal setelah Ajax berhasil
                            $('#popup-modal .font-normal').text("{{ session('success') }}");
                            $('#popup-modal').removeClass('hidden');
                        @endif
                    } else {
                        // Kode promo tidak valid
                        $('#diskonPersen').text('0%');
                        $('#hargaPotongan').text('0');
                        $('#hargaSetelahDiskon').text(hargaAwal.toLocaleString('id-ID', {
                            // minimumFractionDigits: 3,
                            // maximumFractionDigits: 3
                        }));

                        // Set session flash untuk pesan kesalahan
                        @if (session('error'))
                            // Menampilkan modal setelah Ajax berhasil
                            $('#popup-modal .font-normal').text("{{ session('error') }}");
                            $('#popup-modal').removeClass('hidden');
                        @endif
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
@endsection
