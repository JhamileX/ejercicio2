<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Tarea::class;
    public function definition()
    {
        return [
            'titulo' => $this->faker->name,
            'tarea' => $this->faker->name,
            'fechainicio' => now(),
            'fechaconclucion' => now(), 
            'estado' => $this->faker->randomElement(["creada","en ejecucion","completada"]),
        ];
    }
    
}
