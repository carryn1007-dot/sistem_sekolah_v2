<?php
 
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClassController; 

use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use Illuminate\Support\Facades\Route;
 
//Teacher (Action Controller)
Route::prefix('teachers')->name('teachers.')->group(function () {
 
    Route::get('/', [TeacherController::class,'index'])->name('index');
 
    Route::get('/create', [TeacherController::class,'create'])->name('create');
 
    Route::post('/', [TeacherController::class,'store'])->name('store');
 
    Route::get('/{id}', [TeacherController::class,'show'])->name('show');
 
    Route::get('/{id}/edit', [TeacherController::class,'edit'])->name('edit');
 
    Route::put('/{id}', [TeacherController::class,'update'])->name('update');
 
    Route::delete('/{id}', [TeacherController::class,'destroy'])->name('destroy');
 
});
 
//Student (Action Controller)
Route::prefix('students')->name('students.')->group(function () {
 
    Route::get('/', [StudentController::class,'index'])->name('index');
 
    Route::get('/create', [StudentController::class,'create'])->name('create');
 
    Route::post('/', [StudentController::class,'store'])->name('store');
 
    Route::get('/{id}', [StudentController::class,'show'])->name('show');
 
    Route::get('/{id}/edit', [StudentController::class,'edit'])->name('edit');
 
    Route::put('/{id}', [StudentController::class,'update'])->name('update');
 
    Route::delete('/{id}', [StudentController::class,'destroy'])->name('destroy');
 
});
 
// SchoolClass (Invokable)
Route::prefix('schoolclasses')->name('schoolclasses.')->group(function () {
Route::get('/', [SchoolClassController::class, 'index'])->name('index');
Route::get('/create', [SchoolClassController::class, 'create'])->name('create');
Route::post('/', [SchoolClassController::class, 'store'])->name('store');
Route::get('/{id}', [SchoolClassController::class, 'show'])->name('show');
Route::get('/{id}/edit', [SchoolClassController::class, 'edit'])->name('edit');
Route::put('/{id}', [SchoolClassController::class, 'update'])->name('update');
Route::delete('/{id}', [SchoolClassController::class, 'destroy'])->name('destroy');
});
 
//Major (Resource Controller)
Route::resource('majors', MajorController::class);