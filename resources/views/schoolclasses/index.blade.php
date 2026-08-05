@extends('layouts.app')
 
@section('title', $title)
 
@section('content')
 
    <div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">
        <div>
            <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">Academic Year 2025/2026</p>
            <h1 class="font-display text-3xl font-semibold text-[#16213A]">Class List</h1>
        </div>
 
        <a href="{{ route('schoolclasses.create') }}"
            class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
            Add New Class
        </a>
    </div>
 
    <div class="border border-[#E5E3DB] bg-white">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-[#16213A] text-[11px] uppercase tracking-[0.15em] text-[#16213A]">
                    <th class="w-14 px-5 py-3.5 font-semibold">No.</th>
                    <th class="px-5 py-3.5 font-semibold">Class Name</th>
                    <th class="px-5 py-3.5 font-semibold">Grade</th>
                    <th class="px-5 py-3.5 font-semibold">Major</th>
                    <th class="px-5 py-3.5 font-semibold">Homeroom Teacher</th>
                    <th class="px-5 py-3.5 text-right font-semibold">Actions</th>
                </tr>
            </thead>
 
            <tbody>
                @foreach ($schoolclasses as $schoolclass)
                    <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5]">
 
                        <td class="px-5 py-4 font-display text-lg text-[#A16207]">
                            {{ $loop->iteration }}
                        </td>
 
                        <td class="px-5 py-4 font-medium text-[#16213A]">
                            {{ $schoolclass['name'] }}
                        </td>
 
                        <td class="px-5 py-4">
                            {{ $schoolclass['grade'] }}
                        </td>
 
                        <td class="px-5 py-4">
                            {{ $schoolclass['major'] }}
                        </td>
 
                        <td class="px-5 py-4">
                            {{ $schoolclass['homeroom_teacher'] }}
                        </td>
 
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-4 text-xs font-medium">
 
                                <a href="{{ route('schoolclasses.show', $schoolclass['id']) }}"
                                    class="text-[#16213A] hover:text-[#A16207]">
                                    View
                                </a>
 
                                <a href="{{ route('schoolclasses.edit', $schoolclass['id']) }}"
                                    class="text-[#16213A] hover:text-[#A16207]">
                                    Edit
                                </a>
 
                                <form action="{{ route('schoolclasses.destroy', $schoolclass['id']) }}" method="POST"
                                    onsubmit="return confirm('Delete this class?')">
 
                                    @csrf
                                    @method('DELETE')
 
                                    <button type="submit" class="text-red-700 hover:text-red-900">
                                        Delete
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