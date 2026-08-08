<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function majors()
    {
        return [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
            ],
        ];
    }

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';

        $majors = $this->majors();

        return view('majors.index', [
            'title' => $title,
            'majors' => $majors,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Jurusan';

        return view('majors.create', [
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        return 'Menambah data jurusan baru';
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Jurusan';

        $majors = $this->majors();

        $major = collect($majors)->firstWhere('id', (int) $id);

        if (!$major) {
            abort(404);
        }

        return view('majors.show', [
            'title' => $title,
            'major' => $major,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Jurusan';

        $majors = $this->majors();

        $major = collect($majors)->firstWhere('id', (int) $id);

        if (!$major) {
            abort(404);
        }

        return view('majors.edit', [
            'title' => $title,
            'major' => $major,
        ]);
    }

    public function update(Request $request, string $id)
    {
        return "Mengubah data jurusan dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan dengan ID: {$id}";
    }
}