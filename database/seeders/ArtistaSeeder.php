<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artista;

class ArtistaSeeder extends Seeder
{

    public function run(): void
    {
        Artista::factory()->count(10)->create();
    }
}
