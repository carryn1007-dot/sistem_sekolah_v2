@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header :title="$title" description="Tambahkan data siswa baru ke dalam buku induk." />

    <form action="{{ route('students.store') }}" method="POST" class="mt-6 space-y-6 border border-[#E5E3DB] bg-white p-8">

        @csrf

        <div>
            <label for="nis" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                NIS
            </label>

            <input type="text" id="nis" name="nis" placeholder="Contoh: 1003"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Lengkap
            </label>

            <input type="text" id="name" name="name" placeholder="Nama lengkap siswa"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="major" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Jurusan
            </label>

            <select id="major" name="major"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="">Pilih jurusan</option>
                <option value="AKL">AKL</option>
                <option value="TKJ">TKJ</option>
                <option value="BD">BD</option>

            </select>
        </div>

        <div>
            <label for="class" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Kelas
            </label>

            <input type="text" id="class" name="class" placeholder="Contoh: XII TKJ 1"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="{{ route('students.index') }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Batal
            </a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Simpan ke Buku Induk
            </button>

        </div>

    </form>

@endsection