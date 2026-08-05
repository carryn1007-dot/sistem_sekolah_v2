<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
];
        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);

    }

    public function create()
    {
        return 'Menampilkan halaman tambah guru';
    }

    public function store(Request $request)
    {
        return 'Melakukan penambahan data guru';
    }

    public function show($id)
    {
        return "Menampilkan guru dengan ID: {$id}";
    }

    public function edit($id)
    {
        return "Menampilkan halaman edit guru dengan ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data guru dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}