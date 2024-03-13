<?php

namespace Database\Seeders;

use App\Models\Library;
use App\Models\User;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    public function run()
    {
        Library::query()->create([
            'title' => 'Título',
            'authorPublisher' => 'Autor Teste',
            'publicationDate' => '2010-02-02',
            'genreType' => 'Tecnologia',
            'availableCopies' => 1
        ]);
    }
}
