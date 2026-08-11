<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request, string $id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major_id' => 'AKL',
                'teacher_id' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major_id' => 'TKJ',
                'teacher_id' => 'Siti Aminah',
            ],
        ];

        $class = collect($classes)
            ->firstWhere('id', (int) $id);

        if (!$class) {
            abort(404);
        }

        return view('classes.show', [
            'title' => $title,
            'class' => $class,
        ]);
    }
}