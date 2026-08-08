<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        return [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'major' => 'TKJ',
                'class' => 'XII TKJ 1',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'major' => 'TKJ',
                'class' => 'XII TKJ 2',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';

        $students = $this->students();

        return view('students.index', [
            'title' => $title,
            'students' => $students,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Catat Siswa Baru';

        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        return 'Menambah data siswa baru';
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';

        $students = $this->students();

        $student = collect($students)
            ->firstWhere('id', (int) $id);

        if (!$student) {
            abort(404);
        }

        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Ubah Data Siswa';

        $students = $this->students();

        $student = collect($students)
            ->firstWhere('id', (int) $id);

        if (!$student) {
            abort(404);
        }

        return view('students.edit', [
            'title' => $title,
            'student' => $student,
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