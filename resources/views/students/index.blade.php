@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header title="Daftar Siswa" description="Daftar siswa yang terdaftar dalam sistem sekolah." />

    <div class="mt-6 flex justify-end">
        <a href="{{ route('students.create') }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Tambah Siswa
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
                        NIS
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Nama
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Jurusan
                    </th>

                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Kelas
                    </th>

                    <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.1em] text-[#16213A]">
                        Tindakan
                    </th>

                </tr>
            </thead>

            <tbody class="divide-y divide-[#EFEDE6]">

                @foreach ($students as $student)

                    <tr class="transition hover:bg-[#FCFBF8]">

                        <td class="px-6 py-4 text-base text-[#A16207]">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-6 py-4 font-mono text-xs text-slate-500">
                            {{ $student['nis'] }}
                        </td>

                        <td class="px-6 py-4 text-sm font-medium text-[#16213A]">
                            {{ $student['name'] }}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $student['major'] }}
                        </td>

                        <td class="px-6 py-4 text-sm text-slate-600">
                            {{ $student['class'] }}
                        </td>

                        <td class="px-6 py-4">

                            <div class="flex justify-end gap-3">

                                <a href="{{ route('students.show', $student['id']) }}"
                                    class="text-sm font-medium text-[#16213A] hover:underline">
                                    Lihat
                                </a>

                                <a href="{{ route('students.edit', $student['id']) }}"
                                    class="text-sm font-medium text-[#A16207] hover:underline">
                                    Ubah
                                </a>

                                <form action="{{ route('students.destroy', $student['id']) }}" method="POST"
                                    onsubmit="return confirm('Hapus data siswa ini?')">

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