<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function tarloc(): array
    {
        $target_location = [];

        for ($i = 0; $i <= 5; $i++) {
            array_push($target_location, random_int(1, 10));
            // $target_location + random_int(1, 10);
        }

        return $target_location;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'company_name' => 'achim',
            ],
            [
                'company_name' => "rajdhani",
            ],
            [
                'company_name' => 'bondhon',
            ],
            [
                'company_name' => 'anabil',
            ],
            [
                'company_name' => 'turag',
            ]
        ];

        foreach ($companies as $company) {
            $target_location = [];
            for ($i = 0; $i <= 5; $i++) {
                array_push($target_location, random_int(1, 6));
            }
            $new_companies = Company::create($company);
            $new_companies->locations()->sync($target_location);
        }
    }
}
