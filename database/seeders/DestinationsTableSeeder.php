<?php

namespace Database\Seeders;

use App\Models\Benefic;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Benefic */
        $hidratacion = Benefic::findByName('Hidratación');
        /** @var Benefic */
        $desayuno = Benefic::findByName('Desayuno');
        /** @var Benefic */
        $almuerzo = Benefic::findByName('Almuerzo');
        /** @var Benefic */
        $fotografías = Benefic::findByName('Fotografías');

        /**
         * La puerta del LLano
         * @var Destination
         */
        $destination = Destination::updateOrCreate(['slug' => Str::slug('La Puerta del Llano')], [
            'name' => 'La Puerta del Llano',
            'body' => 'Está en la entrada de san juan de los morros, en una diminuta desviación a la derecha poco después de una estación de gasolina a la entrada de la ciudad , es parte del carretera vieja y simboliza el éxito en las batallas de la independencia, fue construido a principios del siglo XX   
            viaja con travel us y conoce la increíble historia.',
            'image_url' => asset('images/hotel-banos-termales.jpg'),
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Excursión estudiantil',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-14 8:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-14 14:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $desayuno->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 2
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 1
        ], [
            'amount' => 10
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Turistiando',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-15 8:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-15 14:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $desayuno->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 2
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 1
        ], [
            'amount' => 15
        ]);

        /**
         * Hotel aguas termales
         * @var Destination
         */
        $destination = Destination::updateOrCreate(['slug' => Str::slug('Hotel aguas termales')], [
            'name' => 'Hotel aguas termales',
            'body' => 'Son aguas sulfurosas, alcalinas, boratadas, de color azulado, con una temperatura media de 33,5 °C. Se trata de un manantial termo-mineral con una capacidad de 6.800 L/h. Están rodeadas por un bosque seco-tropical, de una vegetación muy árida. Posee salas de baño, piscinas y servicios variados. Están situadas al Noroeste de San Juan de Los Morros.',
            'image_url' => asset('images/arco-del-llano.jpg'),
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Nadaremos',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-19 9:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-19 16:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $almuerzo->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 3
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 1,
        ], [
            'amount' => 20
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Nadaremos Pareja',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-19 9:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-19 16:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $almuerzo->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 3
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 2,
        ], [
            'amount' => 25
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Nadaremos Familia 03',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-19 9:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-19 16:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $almuerzo->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 3
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 3,
        ], [
            'amount' => 45
        ]);

        /** @var \App\Models\Package */
        $package = $destination->packages()->updateOrCreate([
            'name' => 'Nadaremos Familia 04',
        ], [
            'check_in' => \Carbon\Carbon::parse('2021-06-19 9:00'),
            'check_out' => \Carbon\Carbon::parse('2021-06-19 16:00'),
        ]);
        $package->benefics()->syncWithoutDetaching([
            $hidratacion->id => [
                'ilimited' => true
            ],
            $almuerzo->id => [
                'quantity' => 1
            ],
            $fotografías->id => [
                'quantity' => 3
            ]
        ]);
        $package->price()->updateOrCreate([
            'people' => 4,
        ], [
            'amount' => 50
        ]);
    }
}
