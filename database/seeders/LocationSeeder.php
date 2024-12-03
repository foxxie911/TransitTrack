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
            ],
            [
                'location_name' => 'hajipara',
            ],
            [
                'location_name' => 'gulistan',
            ],
            [
                'location_name' => 'uttara',
            ],
            [
                'location_name' => 'mirpur 10',
            ],
            [
                'location_name' => 'mirpur 11',
            ],
            [
                'location_name' => 'mohakhali',
            ],
            [
                'location_name' => 'kuril',
            ],
            [
                'location_name' => 'tejgaon',
            ],
            [
                'location_name' => 'bijoy sarani',
            ]
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
