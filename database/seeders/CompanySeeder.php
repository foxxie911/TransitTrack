<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'company_name' => 'osim',
            ],
            [
                'company_name' => "rajdhani",
            ],
            [
                'company_name' => 'bondhon',
            ]
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
