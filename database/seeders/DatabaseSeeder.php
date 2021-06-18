<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // LettersTableSeeder::class,
            // WordsTableSeeder::class,
            BeneficsTableSeeder::class,
            DestinationsTableSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
