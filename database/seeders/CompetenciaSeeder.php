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
    public function run(): void
    {
        DB::table('competencias')->delete();
        DB::table('cursos')->delete();

        $teachers = User::where('teacher', true)->get();
        $students = User::where('teacher', false)->get();

        $teachers->each(function ($teacher) use ($students) {
            $competencias = Competencia::factory()->count(2)->create([
                'user_id' => $teacher->id,
            ]);

            $competencias->each(function ($competencia) use ($students) {
                $competencia->students()->attach(
                    $students->random(rand(4, 15))->pluck('id')->toArray()
                );

                $cursos = Curso::factory()->count(3)->create([
                    'competencia_id' => $competencia->id,
                ]);
            });
        });
    }
}
