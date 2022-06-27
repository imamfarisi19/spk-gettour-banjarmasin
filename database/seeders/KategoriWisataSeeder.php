<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_wisatas')->insert([
            //1
            'nama' => 'Usaha Kain Sasirangan',
            'linkDirect' => false,
            'isAktif' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //2
            'nama' => 'Restoran Khas Banjar',
            'linkDirect' => false,
            'isAktif' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //3
            'nama' => 'Pasar Tradisional',
            'linkDirect' => false,
            'isAktif' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //4
            'nama' => 'Tempat Bermain Anak',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //5
            'nama' => 'Taman',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //6
            'nama' => 'Taman Bermain Air',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //7
            'nama' => 'Masjid',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //8
            'nama' => 'Gereja',
            'linkDirect' => true,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //9
            'nama' => 'Religi islami',
            'linkDirect' => false,
            'isAktif' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('kategori_wisatas')->insert([
            //10
            'nama' => 'Departement Store',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //11
            'nama' => 'Tempat Olahraga',
            'linkDirect' => false,
            'isAktif' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kategori_wisatas')->insert([
            //12
            'nama' => 'Restoran Non Banjar',
            'linkDirect' => false,
            'isAktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
