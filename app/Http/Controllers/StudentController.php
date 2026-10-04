<?php

namespace App\Http\Controllers;
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
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi
        $validatedRequest = $request->validate([
            'nis' => ['required','string','size:4','unique:students,nis,'],
            'name' => ['required','string'],
            'gender' => ['required', 'string','in:Laki-Laki,Perempuan'],
            'major' => ['required', 'string','in:AKL,TKJ,BiD'],
            'class' => ['required', 'string']
        ]);

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

    public function update(Request $request, Student $student)
    {
        // Validasi
        $validatedRequest = $request->validate([
            'nis' => ['required','string','size:4','unique:students,nis,' . $student->id],
            'name' => ['required','string'],
            'gender' => ['required', 'string','in:Laki-Laki,Perempuan'],
            'major' => ['required', 'string','in:AKL,TKJ,BiD'],
            'class' => ['required', 'string']
        ]);

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