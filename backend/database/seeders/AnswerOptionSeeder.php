<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answerOptions = [
            [
                'question_id' => 1,
                'value' => 'SISBEN.',
                'letter' => 'A',
                'is_other' => 0
            ],
            [
                'question_id' => 1,
                'value' => 'EPS.',
                'letter' => 'B',
                'is_other' => 0
            ],
            [
                'question_id' => 1,
                'value' => 'Prepagada.',
                'letter' => 'C',
                'is_other' => 0
            ],
            [
                'question_id' => 1,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'D',
                'is_other' => 1
            ],
            [
                'question_id' => 2,
                'value' => 'Pariente o Amigo.',
                'letter' => 'A',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Centro de Salud.',
                'letter' => 'B',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Medicina natural.',
                'letter' => 'C',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Médico particular.',
                'letter' => 'D',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Hospital.',
                'letter' => 'E',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'EPS.',
                'letter' => 'F',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Ninguno.',
                'letter' => 'G',
                'is_other' => 0
            ],
            [
                'question_id' => 2,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'H',
                'is_other' => 1
            ],
            [
                'question_id' => 3,
                'value' => 'Gripa.',
                'letter' => 'A',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Diarrea.',
                'letter' => 'B',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Dengue.',
                'letter' => 'C',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Bronquitis..',
                'letter' => 'D',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Amebiasis.',
                'letter' => 'E',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Migraña.',
                'letter' => 'F',
                'is_other' => 0
            ],
            [
                'question_id' => 3,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'G',
                'is_other' => 1
            ],
            [
                'question_id' => 4,
                'value' => 'Propia.',
                'letter' => 'A',
                'is_other' => 0
            ],
            [
                'question_id' => 4,
                'value' => 'Arrendada.',
                'letter' => 'B',
                'is_other' => 0
            ],
            [
                'question_id' => 4,
                'value' => 'Otra ¿Cuál?',
                'letter' => 'C',
                'is_other' => 1
            ],
            [
                'question_id' => 5,
                'value' => 'Cocina.',
                'letter' => 'A',
                'is_other' => 0
            ],
            [
                'question_id' => 5,
                'value' => 'Comedor.',
                'letter' => 'B',
                'is_other' => 0
            ],
            [
                'question_id' => 5,
                'value' => 'Sala.',
                'letter' => 'C',
                'is_other' => 0
            ],
            [
                'question_id' => 5,
                'value' => 'Alcobas.',
                'letter' => 'D',
                'is_other' => 0
            ],
            [
                'question_id' => 5,
                'value' => 'Baño.',
                'letter' => 'E',
                'is_other' => 0
            ],
            [
                'question_id' => 5,
                'value' => 'Patio.',
                'letter' => 'F',
                'is_other' => 0
            ]
        ];
        DB::table('answer_options')->insert($answerOptions);
    }
}
