<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $response = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds');

        $data = $response->json();

        foreach ($data as  $wine) {

            $newWine = new Wine();

            $newWine->winery = $wine['winery'];
            $newWine->wine = $wine['wine'];
            $newWine->location = $wine['location'];
            $newWine->image = $wine['image'];

            $newWine->save();
        }
    }
}
