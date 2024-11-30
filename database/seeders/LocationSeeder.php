<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'location_name' => 'rampura',
                'latitude' => 23.762810,
                'longitude' => 90.420163,
            ],
            [
                'location_name' => 'hajipara',
                'latitude' => 23.758155,
                'longitude' => 90.417634,
            ]
        ];

        foreach ($locations as $location){
            Location::create($location);
        }
    }
}
