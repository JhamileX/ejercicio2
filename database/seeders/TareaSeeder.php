<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Database\Factories\TareaFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarea::factory()->count(5000)->create();
    }
}
