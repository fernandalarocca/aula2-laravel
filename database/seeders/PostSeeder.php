<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::query()->create([
            'postTitle' => 'Teste de título',
            'author' => 'Teste de autor',
            'publicationDate' => '2010-02-02',
            'content' => 'Teste de conteúdo',
            'tags' => 'Tecnologia'
        ]);
    }
}
