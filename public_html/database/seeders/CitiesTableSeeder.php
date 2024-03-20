<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities= [
            ['description' => 'Buenos Aires', 'province_id' => '2'],
            ['description' => 'Córdoba', 'province_id' => '6'],
            ['description' => 'Rosario', 'province_id' => '21'],
            ['description' => 'Mar del Plata', 'province_id' => '1'],
            ['description' => 'San Miguel de Tucumán', 'province_id' => '24'],
            ['description' => 'Salta', 'province_id' => '17'],
            ['description' => 'Santa Fe', 'province_id' => '21'],
            ['description' => 'Corrientes', 'province_id' => '7'],
            ['description' => 'Bahía Blanca', 'province_id' => '1'],
            ['description' => 'Resistencia', 'province_id' => '4'],
            ['description' => 'Posadas', 'province_id' => '14'],
            ['description' => 'Merlo', 'province_id' => '1'],
            ['description' => 'Quilmes', 'province_id' => '1'],
            ['description' => 'San Salvador de Jujuy', 'province_id' => '10'],
            ['description' => 'Guaymallén', 'province_id' => '10'],
            ['description' => 'Santiago del Estero', 'province_id' => '22'],
            ['description' => 'Gregorio de Laferrere', 'province_id' => '1'],
            ['description' => 'José C. Paz', 'province_id' => '1'],
            ['description' => 'Paraná', 'province_id' => '8'],
            ['description' => 'Banfield', 'province_id' => '1'],
            ['description' => 'González Catán', 'province_id' => '1'],
            ['description' => 'Neuquén', 'province_id' => '15'],
            ['description' => 'Formosa', 'province_id' => '9'],
            ['description' => 'Lanús', 'province_id' => '1'],
            ['description' => 'La Plata', 'province_id' => '1'],
            ['description' => 'Godoy Cruz', 'province_id' => '13'],
            ['description' => 'Isidro Casanova', 'province_id' => '1'],
            ['description' => 'Las Heras', 'province_id' => '13'],
            ['description' => 'Berazategui', 'province_id' => '1'],
            ['description' => 'La Rioja', 'province_id' => '12'],
            ['description' => 'Comodoro Rivadavia', 'province_id' => '5'],
            ['description' => 'Moreno', 'province_id' => '1'],
            ['description' => 'San Luis', 'province_id' => '19'],
            ['description' => 'San Miguel', 'province_id' => '1'],
            ['description' => 'San Fernando del Valle de Catamarca', 'province_id' => '3'],
            ['description' => 'Río Cuarto', 'province_id' => '6'],
            ['description' => 'Virrey del Pino', 'province_id' => '1'],
            
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
