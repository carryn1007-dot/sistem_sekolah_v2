@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header title="Daftar Jurusan" description="Daftar seluruh jurusan yang tersedia di sekolah." />

    <div class="mb-5 flex justify-end">
        <a href="{{ route('majors.create') }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Tambah Jurusan
        </a>
    </div>

    <div class="border border-[#E5E3DB] bg-white">

        <table class="w-full text-left text-sm">

            <thead>
                <tr class="border-b border-[#16213A] text-[11px] uppercase tracking-[0.15em] text-[#16213A]">
                    <th class="w-14 px-5 py-3.5">No.</th>
                    <th class="px-5 py-3.5">Kode</th>
                    <th class="px-5 py-3.5">Nama Jurusan</th>
                    <th class="px-5 py-3.5">Deskripsi</th>
                    <th class="px-5 py-3.5 text-right">Tindakan</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($majors as $major)

                    <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5]">

                        <td class="px-5 py-4 font-display text-lg text-[#A16207]">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-5 py-4 font-mono text-xs text-[#16213A]">
                            {{ $major['code'] }}
                        </td>

                        <td class="px-5 py-4 font-medium text-[#16213A]">
                            {{ $major['name'] }}
                        </td>

                        <td class="px-5 py-4 text-slate-500">
                            {{ $major['description'] }}
                        </td>

                        <td class="px-5 py-4">

                            <div class="flex justify-end gap-4 text-xs font-medium">

                                <a href="{{ route('majors.show', $major['id']) }}" class="text-[#16213A] hover:text-[#A16207]">
                                    Lihat
                                </a>

                                <a href="{{ route('majors.edit', $major['id']) }}" class="text-[#16213A] hover:text-[#A16207]">
                                    Ubah
                                </a>

                                <form action="{{ route('majors.destroy', $major['id']) }}" method="POST"
                                    onsubmit="return confirm('Hapus data jurusan ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="text-red-700 hover:text-red-900">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endsection