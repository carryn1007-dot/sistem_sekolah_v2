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


// Teacher
Route::name('teachers.')
    ->prefix('teachers')
    ->group(function () {

        Route::get('/', [TeacherController::class, 'index'])
            ->name('index');

        Route::get('/create', [TeacherController::class, 'create'])
            ->name('create');

        Route::post('/', [TeacherController::class, 'store'])
            ->name('store');

        Route::get('/{id}', [TeacherController::class, 'show'])
            ->name('show');

        Route::get('/{id}/edit', [TeacherController::class, 'edit'])
            ->name('edit');

        Route::put('/{id}', [TeacherController::class, 'update'])
            ->name('update');

        Route::delete('/{id}', [TeacherController::class, 'destroy'])
            ->name('destroy');
    });


// Student
Route::name('students.')
    ->prefix('students')
    ->group(function () {

        Route::get('/', [StudentController::class, 'index'])
            ->name('index');

        Route::get('/create', [StudentController::class, 'create'])
            ->name('create');

        Route::post('/', [StudentController::class, 'store'])
            ->name('store');

        Route::get('/{student}', [StudentController::class, 'show'])
            ->name('show');

        Route::get('/{student}/edit', [StudentController::class, 'edit'])
            ->name('edit');

        Route::put('/{student}', [StudentController::class, 'update'])
            ->name('update');

        Route::delete('/{student}', [StudentController::class, 'destroy'])
            ->name('destroy');
    });


// SchoolClass - Invokable Controllers
Route::name('classes.')
    ->prefix('classes')
    ->group(function () {

        Route::get('/', ClassIndexController::class)
            ->name('index');

        Route::get('/create', ClassCreateController::class)
            ->name('create');

        Route::post('/', ClassStoreController::class)
            ->name('store');

        Route::get('/{id}', ClassShowController::class)
            ->name('show');

        Route::get('/{id}/edit', ClassEditController::class)
            ->name('edit');

        Route::put('/{id}', ClassUpdateController::class)
            ->name('update');

        Route::delete('/{id}', ClassDestroyController::class)
            ->name('destroy');
    });


// Major
Route::resource('majors', MajorController::class);