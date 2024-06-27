<?php

namespace Database\Seeders;

use App\Models\Aroma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AromasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aromasData = config('aromas');

        // foreach ($aromasData as $aroma) {
        //     foreach ($aroma as $curAroma) {
        //         $newAroma = new Aroma();
        //         $newAroma->aromas = $curAroma[];
        //     }
        //     $newAroma->aromas = $aroma;

        for ($i = 0; $i < $aromasData; $i++) {
            $newAroma = new Aroma();
        }

        // $newAroma->save();
    }
}
