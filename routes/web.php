<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\MajorController;

use App\Http\Controllers\SchoolClass\IndexController as ClassIndexController;
use App\Http\Controllers\SchoolClass\CreateController as ClassCreateController;
use App\Http\Controllers\SchoolClass\StoreController as ClassStoreController;
use App\Http\Controllers\SchoolClass\ShowController as ClassShowController;
use App\Http\Controllers\SchoolClass\EditController as ClassEditController;
use App\Http\Controllers\SchoolClass\UpdateController as ClassUpdateController;
use App\Http\Controllers\SchoolClass\DestroyController as ClassDestroyController;


// 1. MANAJEMEN DATA GURU (Action Controller)
Route::name('teachers.')->prefix('teachers')->group(function () {
    // Halaman Daftar Guru
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    // Halaman Form Tambah Guru (Ditaruh di atas /{id} agar tidak crash)
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    // Logika Menyimpan Guru Baru
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    // Halaman Detail Guru
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    // Halaman Form Edit Guru
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    // Logika Mengubah Data Guru
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    // Logika Menghapus Data Guru
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

// MANAJEMEN DATA SISWA (Action Controller)
Route::name('students.')->prefix('students')->group(function () {
    // Halaman Daftar Siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    // Halaman Form Tambah Siswa (Ditaruh di atas /{id} agar tidak crash)
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    // Logika Menyimpan Siswa Baru
    Route::post('/', [StudentController::class, 'store'])->name('store');

    // Halaman Detail Siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // Halaman Form Edit Siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    // Logika Mengubah Data Siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Logika Menghapus Data Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// MANAJEMEN DATA KELAS (Invokable)
Route::name('classes.')->prefix('classes')->group(function () {
    // Halaman Daftar Kelas
    Route::get('/', ClassIndexController::class)->name('index');

    // Halaman Form Tambah Kelas
    Route::get('/create', ClassCreateController::class)->name('create');

    // Logika Menyimpan Kelas Baru
    Route::post('/', ClassStoreController::class)->name('store');

    // Halaman Detail Kelas
    Route::get('/{id}', ClassShowController::class)->name('show');

    // Halaman Form Edit Kelas
    Route::get('/{id}/edit', ClassEditController::class)->name('edit');

    // Logika Mengubah Data Kelas
    Route::put('/{id}', ClassUpdateController::class)->name('update');

    // Logika Menghapus Data Kelas
    Route::delete('/{id}', ClassDestroyController::class)->name('destroy');
});

// MANAJEMEN DATA JURUSAN (Resource)
Route::resource('majors', MajorController::class);