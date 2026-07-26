<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() 
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function create()
    {
        return "Ini adalah halaman tambah siswa";
    }

    public function store(Request $request)
    {
        return "Menambah data siswa baru";
    }

    public function show(string $id)
    {
        return "Menampilkan detail siswa dengan ID: {$id}";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman edit siswa dengan ID: {$id}";
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