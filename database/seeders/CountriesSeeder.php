<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('countries')->insert([
        ['iso2' => 'us', 'slug' => 'usa'     , 'name' => 'United States'],
        ['iso2' => 'co', 'slug' => 'colombia', 'name' => 'Colombia'],
      ]);
    }
}
