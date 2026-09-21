@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header :title="$title" description="Perbarui informasi jurusan yang tersimpan di dalam sistem sekolah." />

    <form action="{{ route('majors.update', $major['id']) }}" method="POST"
        class="mt-6 space-y-6 border border-[#E5E3DB] bg-white p-8">

        @csrf
        @method('PUT')

        {{-- Kode Jurusan --}}
        <div>
            <label for="code" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Kode Jurusan
            </label>

            <input type="text" id="code" name="code" value="{{ $major['code'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        {{-- Nama Jurusan --}}
        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Jurusan
            </label>

            <input type="text" id="name" name="name" value="{{ $major['name'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        {{-- Deskripsi --}}
        <div>
            <label for="description" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Deskripsi
            </label>

            <textarea id="description" name="description" rows="5"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">{{ $major['description'] }}</textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="{{ route('majors.show', $major['id']) }}"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Batal
            </a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Perbarui Data
            </button>

        </div>

    </form>

@endsection