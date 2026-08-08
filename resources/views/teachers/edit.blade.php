@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header title="Ubah Data Guru" description="Perbarui informasi guru yang tersimpan di dalam sistem sekolah." />

    <form action="{{ route('teachers.update', $teacher['id']) }}" method="POST"
        class="space-y-6 border border-[#E5E3DB] bg-white p-8">

        @csrf
        @method('PUT')

        <div>
            <label for="nip" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                NIP
            </label>

            <input type="text" id="nip" name="nip" value="{{ $teacher['nip'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Lengkap
            </label>

            <input type="text" id="name" name="name" value="{{ $teacher['name'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="gender" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Jenis Kelamin
            </label>

            <select id="gender" name="gender"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="Laki-Laki" {{ $teacher['gender'] == 'Laki-Laki' ? 'selected' : '' }}>
                    Laki-Laki
                </option>

                <option value="Perempuan" {{ $teacher['gender'] == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>

            </select>
        </div>

        <div>
            <label for="subject" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Mata Pelajaran
            </label>

            <input type="text" id="subject" name="subject" value="{{ $teacher['subject'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="phone_number" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nomor Telepon
            </label>

            <input type="text" id="phone_number" name="phone_number" value="{{ $teacher['phone_number'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="status" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Status
            </label>

            <select id="status" name="status"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="Aktif" {{ $teacher['status'] == 'Aktif' ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="Tidak Aktif" {{ $teacher['status'] == 'Tidak Aktif' ? 'selected' : '' }}>
                    Tidak Aktif
                </option>

            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="{{ route('teachers.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Batal
            </a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Perbarui Data Guru
            </button>

        </div>

    </form>

@endsection