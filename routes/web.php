<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClassController;

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

        Route::get('/{id}', [StudentController::class, 'show'])
            ->name('show');

        Route::get('/{id}/edit', [StudentController::class, 'edit'])
            ->name('edit');

        Route::put('/{id}', [StudentController::class, 'update'])
            ->name('update');

        Route::delete('/{id}', [StudentController::class, 'destroy'])
            ->name('destroy');
    });


// SchoolClass - Invokable Controllers
Route::name('classes.')
    ->prefix('classes')
    ->group(function () {
        Route::get('/', [SchoolClassController::class, 'index'])
            ->name('index');

        Route::get('/create', [SchoolClassController::class, 'create'])
            ->name('create');

        Route::post('/', [SchoolClassController::class, 'store'])
            ->name('store');

        Route::get('/{id}', [SchoolClassController::class, 'show'])
            ->name('show');

        Route::get('/{id}/edit', [SchoolClassController::class, 'edit'])
            ->name('edit');

        Route::put('/{id}', [SchoolClassController::class, 'update'])
            ->name('update');

        Route::delete('/{id}', [SchoolClassController::class, 'destroy'])
            ->name('destroy');
    });


// Major
Route::resource('majors', MajorController::class);