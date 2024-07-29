<?php

namespace Database\Seeders;

use App\Models\PostFlayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostFlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        PostFlayer::factory()->create([
            'title' => 'Poblado al Natural',
            'description' => "- Transporte \n- Visita al Parque del Poblado (contexto histórico) \n- Visita y recorrido al Parque de la Presidenta (fauna y flora) \n- Visita y recorrido Bosques La Frontera \n- Actividad de meditación \n- Ingreso a spa (válido para dos personas): masaje corporal y aromaterapia. 1 hora. \n- Visita a Mirador Las Palmas (opcional) \n- Recogida y regreso en el hotel \n- Seguro de viaje \n- Guía acompañante durante todo el recorrido",
            'duration' => 4,
            'prices' => "Precio especial por pareja: $ 580.000 o 170 USD. \nPrecio por persona: $ 500.000 o 150 USD.",
            'img' => 'parque_poblado.jpg',
        ]);

        PostFlayer::factory(10)->create();
    }
}
