<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([
            //1
            'nama' => 'Banjarmasin Barat',
            'latitude' => -3.3297459858036300,
            'longitude' => 114.5694849618150000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kecamatans')->insert([
            //2
            'nama' => 'Banjarmasin Selatan',
            'latitude' => -3.3331428106095600,
            'longitude' => 114.5861156154010000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kecamatans')->insert([
            //3
            'nama' => 'Banjarmasin Tengah',
            'latitude' => -3.3196150110139500,
            'longitude' => 114.5872737779230000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kecamatans')->insert([
            //4
            'nama' => 'Banjarmasin Timur',
            'latitude' => -3.3196802102509500,
            'longitude' => 114.6177002683060000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kecamatans')->insert([
            //5
            'nama' => 'Banjarmasin Utara',
            'latitude' => -3.2894731497429000,
            'longitude' => 114.5895907771990000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
