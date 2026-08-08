<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    private function classes()
    {
        return [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major_id' => 1,
                'teacher_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major_id' => 2,
                'teacher_id' => 2,
            ],
        ];
    }

    private function majors()
    {
        return [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
            ],
        ];
    }

    private function teachers()
    {
        return [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Kelas';

        $classes = $this->classes();
        $majors = $this->majors();
        $teachers = $this->teachers();

        foreach ($classes as &$class) {
            $major = collect($majors)->firstWhere('id', $class['major_id']);
            $teacher = collect($teachers)->firstWhere('id', $class['teacher_id']);

            $class['major'] = $major['code'];
            $class['homeroom_teacher'] = $teacher['name'];
        }

        return view('classes.index', [
            'title' => $title,
            'classes' => $classes,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Kelas';

        $majors = $this->majors();
        $teachers = $this->teachers();

        return view('classes.create', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }

    public function store(Request $request)
    {
        return "Menambah data kelas baru";
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        $classes = $this->classes();
        $majors = $this->majors();
        $teachers = $this->teachers();

        $class = collect($classes)->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        $major = collect($majors)->firstWhere('id', $class['major_id']);
        $teacher = collect($teachers)->firstWhere('id', $class['teacher_id']);

        $class['major'] = $major['code'];
        $class['homeroom_teacher'] = $teacher['name'];

        return view('classes.show', [
            'title' => $title,
            'class' => $class,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Ubah Data Kelas';

        $classes = $this->classes();

        $class = collect($classes)->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        $majors = $this->majors();
        $teachers = $this->teachers();

        return view('classes.edit', [
            'title' => $title,
            'class' => $class,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }

    public function update(Request $request, string $id)
    {
        return "Mengubah data kelas dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data kelas dengan ID: {$id}";
    }
}