@extends('layouts.app')

@section('title', $title)

@section('content')

    <x-page-header :title="$title" description="Ubah data kelas yang sudah terdaftar dalam sistem sekolah." />

    <form action="{{ route('classes.update', $class['id']) }}" method="POST"
        class="mt-6 space-y-6 border border-[#E5E3DB] bg-white p-8">

        @csrf
        @method('PUT')

        {{-- Nama Kelas --}}
        <div>
            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Kelas
            </label>

            <input type="text" id="name" name="name" value="{{ $class['name'] }}"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        {{-- Tingkat --}}
        <div>
            <label for="grade" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Tingkat
            </label>

            <select id="grade" name="grade"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                <option value="X" {{ $class['grade'] === 'X' ? 'selected' : '' }}>
                    X
                </option>

                <option value="XI" {{ $class['grade'] === 'XI' ? 'selected' : '' }}>
                    XI
                </option>

                <option value="XII" {{ $class['grade'] === 'XII' ? 'selected' : '' }}>
                    XII
                </option>
            </select>
        </div>

        {{-- Jurusan --}}
        <div>
            <label for="major_id" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Jurusan
            </label>

            <select id="major_id" name="major_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                @foreach ($majors as $major)
                    <option value="{{ $major['id'] }}" {{ $class['major_id'] == $major['id'] ? 'selected' : '' }}>
                        {{ $major['code'] }} - {{ $major['name'] }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Wali Kelas --}}
        <div>
            <label for="teacher_id" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Wali Kelas
            </label>

            <select id="teacher_id" name="teacher_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher['id'] }}" {{ $class['teacher_id'] == $teacher['id'] ? 'selected' : '' }}>
                        {{ $teacher['name'] }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="{{ route('classes.show', $class['id']) }}"
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