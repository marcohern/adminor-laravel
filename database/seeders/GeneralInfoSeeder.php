<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('general_info')->insert([
        'slug' => 'adminor',
        'title' => 'Adminor',
        'subtitle' => 'The Simple Admin Tool',
        'lat' => 0.0,
        'lng' => 0.0,
        'phone' => '2345678901',
        'address' => '',
        'logo_path' => 'path/to/logo.png',
        'logo_bw_path' => 'path/to/logo-bw.png'
      ]);
    }
}
