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
        ['id'=>1, 'iso2' => 'us', 'slug' => 'usa'     , 'name' => 'United States'],
        ['id'=>2, 'iso2' => 'co', 'slug' => 'colombia', 'name' => 'Colombia'],
      ]);
    }
}
