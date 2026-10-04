<?php

namespace App\Http\Controllers;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';

        $students = Student::select(['id','nis','name','class','major'])->get();
        

        return view('students.index', [
            'title' => $title,
            'students' => $students,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Catat Siswa Baru';

        return view('students.create', [
            'title' => $title
        ]);
    }

    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Tambahkan Ke Database
        Student::create($validatedRequest);

        //Handle If Success
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = 'Sistem Sekolah - Ubah Data Siswa';

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function update(UpdateRequest $request, Student $student)
    {
        // Validasi
        $validatedRequest = $request->validated();

        //Update Data
        $student->update($validatedRequest);

        //Handle If Success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        //Handle If Success
        return redirect()->route('students.index');
    }
}