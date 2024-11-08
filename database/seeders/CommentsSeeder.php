<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            "publication_id" => 1,
            "comment" => "teste de comentário"
        ]);

        Comment::create([
            "publication_id" => 1,
            "comment" => "teste de comentário 2"
        ]);

        Comment::create([
            "publication_id" => 1,
            "comment" => "teste de comentário 3"
        ]);
    }
}
