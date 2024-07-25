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
            'description' => "Transporte \nVisita al Parque del Poblado (contexto histórico) \nVisita y recorrido al Parque de la Presidenta (fauna y flora) \nVisita y recorrido Bosques La Frontera \nActividad de meditación \nIngreso a spa (válido para dos personas): masaje corporal y aromaterapia. 1 hora. \nVisita a Mirador Las Palmas (opcional) \nRecogida y regreso en el hotel \nSeguro de viaje \nGuía acompañante durante todo el recorrido",
            'duration' => 4,
            'prices' => "Precio especial por pareja: $ 580.000 o 170 USD. \nPrecio por persona: $ 500.000 o 150 USD.",
            'img' => 'parque_poblado.jpg',
        ]);
    }
}
