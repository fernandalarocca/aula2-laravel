<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::query()->create([
            'name' => 'Fernanda Larocca',
            'dateOfBirth' => '2004-03-05',
            'email' => 'teste2@email.com',
            'registrationNumber' => 'RA123456789',
            'ClassCourse' => 'Análise e Desenvolvimento de Sistemas'
        ]);
    }
}
