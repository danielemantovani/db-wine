<?php

namespace Database\Seeders;

use App\Models\Aroma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AromasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aromasData = config('aromas');
        dd($aromasData);

        // foreach ($aromasData as $aroma) {
        //     $newAroma = new Aroma();
        //     $newAroma->aromas = $aroma["aromas"];

        // }
    }
}
