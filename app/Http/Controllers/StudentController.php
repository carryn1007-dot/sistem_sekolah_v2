<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() 
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL'
            ],
        ]; 

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Catat Siswa Baru - Sistem Sekolah";

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
        $title = "Lembar Siswa - Sistem Sekolah";

            return view('students.show', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = "Ubah Data Siswa - Sistem Sekolah";
        
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