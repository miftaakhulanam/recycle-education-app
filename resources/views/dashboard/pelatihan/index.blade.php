@extends('dashboard.layouts.main')

@section('container')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Data Pelatihan</h3>

            <div class="flex flex-col mt-8">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        No.</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        kelas</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Waktu</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @php
                                    $iterationNumber = ($pelatihan->currentPage() - 1) * $pelatihan->perPage();
                                @endphp
                                @foreach ($pelatihan as $p)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm text-center leading-5 text-gray-900">
                                                {{ ++$iterationNumber }}.
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $p->user->username }}</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $p->kelas->judul }}</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-900">{{ $p->created_at }}
                                            </div>
                                        </td>
                                        <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            @if ($p->jawaban_id)
                                                @if ($p->status_lulus == 'lulus')
                                                    <p class="text-sm text-center uppercase text-green-500 font-medium">
                                                        LULUS</p>
                                                @elseif($p->status_lulus == 'tidak_lulus')
                                                    <p class="text-sm text-center uppercase text-main font-medium">
                                                        TIDAK LULUS</p>
                                                @else
                                                    <p class="text-sm text-center text-blue-500 font-medium">
                                                        Menunggu dikoreksi</p>
                                                @endif
                                            @else
                                                <p class="text-sm text-center text-amber-400 font-medium">
                                                    Sedang dikerjakan</p>
                                            @endif
                                        </td>

                                        <td
                                            class="px-6 py-7 mt-[0.15rem] flex gap-2 justify-center items-center border-b border-gray-200">
                                            @if ($p->jawaban_id)
                                                <a href="/dashboard/pelatihan/{{ $p->id }}/edit"
                                                    class="inline-block bg-main hover:bg-red-700 px-3 text-white py-2 rounded-lg">Detail
                                                </a>
                                            @else
                                                <p
                                                    class="inline-block bg-gray-500 px-3 text-white py-2 rounded-lg cursor-not-allowed">
                                                    Detail
                                                </p>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                {{ $pelatihan->links('vendor.pagination.default') }}
            </div>
        </div>
    </main>
@endsection
