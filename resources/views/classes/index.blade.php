@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header title="Daftar Kelas" description="Daftar kelas yang terdaftar dalam sistem sekolah." />

    <div class="mt-6 flex justify-end">
        <a href="{{ route('classes.create') }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Tambah Kelas
        </a>
    </div>

    <div class="mt-4 overflow-hidden border border-[#E5E3DB] bg-white">

        <table class="w-full text-left text-sm">

            <thead class="border-b border-[#16213A] bg-white">
                <tr>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        No.
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Nama Kelas
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Tingkat
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Jurusan
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Wali Kelas
                    </th>

                    <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Tindakan
                    </th>

                </tr>
            </thead>

            <tbody class="divide-y divide-[#EFEDE6]">

                @foreach ($classes as $class)

                    <tr class="transition hover:bg-[#FCFBF8]">

                        <td class="px-6 py-4 text-sm text-[#A16207]">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-6 py-4 text-sm font-medium text-[#16213A]">
                            {{ $class['name'] }}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $class['grade'] }}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $class['major_id'] }}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $class['teacher_id'] }}
                        </td>

                        <td class="px-6 py-4">

                            <div class="flex justify-end gap-3">

                                <a href="{{ route('classes.show', $class['id']) }}"
                                    class="text-sm font-medium text-[#16213A] hover:underline">
                                    Lihat
                                </a>

                                <a href="{{ route('classes.edit', $class['id']) }}"
                                    class="text-sm font-medium text-[#A16207] hover:underline">
                                    Ubah
                                </a>

                                <form action="{{ route('classes.destroy', $class['id']) }}" method="POST"
                                    onsubmit="return confirm('Hapus data kelas ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="text-sm font-medium text-red-700 hover:underline">
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