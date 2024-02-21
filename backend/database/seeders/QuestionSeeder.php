<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'statement' => '¿Con que tipo de servicio de salud cuenta usted y la familia?',
                'group' => 'Servicios Sociales',
                'multiple_answers' => 0
            ],
            [
                'statement' => '¿Inicialmente a que servicio de salud acude cuando se enferma algún miembro de la familia?',
                'group' => 'Servicios Sociales',
                'multiple_answers' => 0
            ],
            [
                'statement' => '¿Cuáles son las enfermedades más frecuentes al interior de la familia?',
                'group' => 'Servicios Sociales',
                'multiple_answers' => 0
            ],
            [
                'statement' => '¿La vivienda donde reside es?',
                'group' => 'Servicios Sociales',
                'multiple_answers' => 0
            ],
            [
                'statement' => '¿La vivienda esta compuesta por?',
                'group' => 'Servicios Sociales',
                'multiple_answers' => 1
            ]
        ];
        DB::table('questions')->insert($questions);
    }
}
