<?php

namespace Database\Seeders;

use App\Models\Benefic;
use Illuminate\Database\Seeder;

class BeneficsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Benefic::updateOrCreate(['name' => 'Hidratación'], ['icon' => 'water']);
        Benefic::updateOrCreate(['name' => 'Desayuno'], ['icon' => 'food']);
        Benefic::updateOrCreate(['name' => 'Almuerzo'], ['icon' => 'food']);
        Benefic::updateOrCreate(['name' => 'Fotografías'], ['icon' => 'photo']);
    }
}
