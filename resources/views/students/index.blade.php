@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header eyebrow="Sistem Sekolah" title="Daftar Siswa"
        description="Daftar seluruh siswa yang terdaftar di sekolah." :breadcrumbs="['Buku Induk', 'Daftar Siswa']" />

    <div class="mb-5 flex justify-end">
        <a href="{{ route('students.create') }}"
            class="bg-[#16213A] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#26324f]">
            Catat Siswa Baru
        </a>
    </div>

    <div class="border border-[#E5E3DB] bg-white">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-[#E5E3DB] text-[11px] uppercase tracking-[0.15em] text-[#16213A]">
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">NIS</th>
                    <th class="px-5 py-4">Nama Siswa</th>
                    <th class="px-5 py-4">Jenis Kelamin</th>
                    <th class="px-5 py-4">Jurusan</th>
                    <th class="px-5 py-4">Kelas</th>
                    <th class="px-5 py-4 text-right">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5]">

                        <td class="px-5 py-4 font-display text-lg text-[#A16207]">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-5 py-4 font-mono text-xs text-slate-500">
                            {{ $student['nis'] }}
                        </td>

                        <td class="px-5 py-4 font-semibold text-[#16213A]">
                            {{ $student['name'] }}
                        </td>

                        <td class="px-5 py-4 text-[#16213A]">
                            {{ $student['gender'] }}
                        </td>

                        <td class="px-5 py-4 text-[#16213A]">
                            {{ $student['major'] }}
                        </td>

                        <td class="px-5 py-4 text-[#16213A]">
                            {{ $student['class'] }}
                        </td>

                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-4 text-xs font-medium">

                                <a href="{{ route('students.show', ['id' => $student['id']]) }}"
                                    class="text-[#16213A] hover:text-[#A16207]">
                                    Lihat
                                </a>

                                <a href="{{ route('students.edit', ['id' => $student['id']]) }}"
                                    class="text-[#16213A] hover:text-[#A16207]">
                                    Ubah
                                </a>

                                <form action="{{ route('students.destroy', ['id' => $student['id']]) }}" method="POST"
                                    onsubmit="return confirm('Hapus data siswa ini dari buku induk?')">
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