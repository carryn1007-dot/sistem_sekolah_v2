<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        return 'Menampilkan halaman daftar jurusan';
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