<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = Company::all();
        Bus::factory(30)->recycle($companies)->create();
    }
}
