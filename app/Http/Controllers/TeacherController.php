<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private function teachers()
    {
        return [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
                'nip' => '198501012010011001',
                'email' => 'budi@sekolah.sch.id',
                'phone' => '081234567890',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
                'nip' => '198702152012022002',
                'email' => 'siti@sekolah.sch.id',
                'phone' => '081234567891',
            ],
            [
                'id' => 3,
                'name' => 'Andi Wijaya',
                'nip' => '198903202014031003',
                'email' => 'andi@sekolah.sch.id',
                'phone' => '081234567892',
            ],
        ];
    }

    public function index()
    {
        $title = 'Daftar Guru';

        $teachers = $this->teachers();

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);
    }

    public function create()
    {
        $title = 'Tambah Guru';

        return view('teachers.create', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        return "Menambah data guru baru";
    }

    public function show(string $id)
    {
        $title = 'Detail Guru';

        $teachers = $this->teachers();

        $teacher = collect($teachers)
            ->firstWhere('id', (int) $id);

        if (!$teacher) {
            abort(404);
        }

        return view('teachers.show', [
            'title' => $title,
            'teacher' => $teacher
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Ubah Data Guru';

        $teachers = $this->teachers();

        $teacher = collect($teachers)
            ->firstWhere('id', (int) $id);

        if (!$teacher) {
            abort(404);
        }

        return view('teachers.edit', [
            'title' => $title,
            'teacher' => $teacher
        ]);
    }

    public function update(Request $request, string $id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}