<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

public function index()
{
    $title = 'Sistem Sekolah - Daftar Kelas';

    $classes = [
        [
            'id' => 1,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso',
        ],
        [
            'id' => 2,
            'name' => 'XII TKJ 1',
            'grade' => 'XII',
            'major' => 'TKJ',
            'homeroom_teacher' => 'Siti Aminah',
        ],
    ];

    return view('schoolclasses.index', [
        'title' => $title,
        'classes' => $classes,
    ]);
}

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";

            return view('students.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        return "Menambah data siswa baru";
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Siswa";

            return view('students.show', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        
            return view('students.edit', [
            'title' => $title
        ]);
    }

    public function update(Request $request, string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}