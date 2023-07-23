<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Competencia;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(int $competenciaCount = 3): void
    {
        DB::table('competencias')->delete();
        DB::table('cursos')->delete();

        $teachers = User::where('teacher', true)->get();
        $students = User::where('teacher', false)->get();

        $competenciaCount = 3;

        $teachers->each(function ($teacher) use ($students, $competenciaCount) {
            $competencias = Competencia::factory()->count($competenciaCount)->create([
                'user_id' => $teacher->id,
            ]);

            $shuffledStudents = $students->shuffle();

            $competencias->each(function ($competencia) use ($shuffledStudents) {
                $selectedStudents = $shuffledStudents->random(rand(5, 15));
                $selectedStudents->each(function ($student) use ($competencia) {
                    $competencia->students()->attach($student);
                });

                $cursos = Curso::factory()->count(3)->create([
                    'competencia_id' => $competencia->id,
                ]);
            });
        }); 
    }
}
