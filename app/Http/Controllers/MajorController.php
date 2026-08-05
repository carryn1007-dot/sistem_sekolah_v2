<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Jurusan";

        $majors = [
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

        return view('majors.index', compact('title', 'majors'));
    }

    public function create()
    {
        return 'Menampilkan halaman tambah jurusan';
    }

    public function store(Request $request)
    {
        return 'Melakukan penambahan data jurusan';
    }

    public function show($id)
    {
        return "Menampilkan jurusan dengan ID: {$id}";
    }

    public function edit($id)
    {
        return "Menampilkan halaman edit jurusan";
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data jurusan";
    }

    public function destroy($id)
    {
        return "Menghapus data jurusan";
    }
}