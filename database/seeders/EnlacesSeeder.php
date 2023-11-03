<?php

namespace Database\Seeders;

use App\Models\Enlaces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enlaces::factory()->count(50)->create(); 
    }
}
