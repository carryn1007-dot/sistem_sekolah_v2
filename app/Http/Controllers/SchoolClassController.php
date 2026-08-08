<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    private $classes = [
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

    private $majors = [
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

    private $teachers = [
        [
            'id' => 1,
            'name' => 'Budi Santoso',
        ],
        [
            'id' => 2,
            'name' => 'Siti Aminah',
        ],
    ];

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Kelas';

        return view('classes.index', [
            'title' => $title,
            'classes' => $this->classes,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Kelas';

        return view('classes.create', [
            'title' => $title,
            'majors' => $this->majors,
            'teachers' => $this->teachers,
        ]);
    }

    public function store(Request $request)
    {
        return 'Menambah data kelas baru';
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        $class = collect($this->classes)
            ->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        return view('classes.show', [
            'title' => $title,
            'class' => $class,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Kelas';

        $class = collect($this->classes)
            ->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        return view('classes.edit', [
            'title' => $title,
            'class' => $class,
            'majors' => $this->majors,
            'teachers' => $this->teachers,
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