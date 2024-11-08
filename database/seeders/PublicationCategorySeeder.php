<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PublicationCategory;

class PublicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PublicationCategory::create([
            "name"=>"Geral"
        ]);

        PublicationCategory::create([
            "name"=>"Ciências"
        ]);

        PublicationCategory::create([
            "name"=>"Tecnologias"
        ]);
    }
}
