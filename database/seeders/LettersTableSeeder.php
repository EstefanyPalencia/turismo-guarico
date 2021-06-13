<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('letters')->delete();
        $letters = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l', 'm', 'ñ', 'o', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
            'y', 'z'
        ];

        foreach ($letters as $letter) {
            Letter::create([
                'letter' => $letter
            ]);
        }
    }
}
