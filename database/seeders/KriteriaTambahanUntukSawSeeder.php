<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaTambahanUntukSawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //1
            'kategoriWisataId' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //2
            'kategoriWisataId' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //3
            'kategoriWisataId' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //4
            'kategoriWisataId' => '2',
            'penjelasan' => 'Harga Murah Dan Bersih',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //5
            'kategoriWisataId' => '2',
            'penjelasan' =>'Spot Photo',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //6
            'kategoriWisataId' => '2',
            'penjelasan' =>'Hiburan Khas Banjar',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //7
            'kategoriWisataId' => '2',
            'penjelasan' => 'Pemandangan Sekitar',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //8
            'kategoriWisataId' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //9
            'kategoriWisataId' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //10
            'kategoriWisataId' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //11
            'kategoriWisataId' => '4',
            'penjelasan' => 'Kebersihan',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //12
            'kategoriWisataId' => '4',
            'penjelasan' => 'Keamanan Alat Permainan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //13
            'kategoriWisataId' => '4',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //14
            'kategoriWisataId' => '5',
            'penjelasan' => 'Alat Bermain',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //15
            'kategoriWisataId' => '5',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //16
            'kategoriWisataId' => '5',
            'penjelasan' => 'Wisata air',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //17
            'kategoriWisataId' => '5',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //18
            'kategoriWisataId' => '6',
            'penjelasan' => 'Memiliki Restoran',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //19
            'kategoriWisataId' => '6',
            'penjelasan' => 'Keamanan Wahana Bagi Pengunjung',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //20
            'kategoriWisataId' => '6',
            'penjelasan' => 'Kebersihan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //21
            'kategoriWisataId' => '7',
            'penjelasan' => 'Kajian Rutin',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //22
            'kategoriWisataId' => '7',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //23
            'kategoriWisataId' => '7',
            'penjelasan' => 'Memiliki Taman',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //24
            'kategoriWisataId' => '7',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //25
            'kategoriWisataId' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //26
            'kategoriWisataId' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //27
            'kategoriWisataId' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //28
            'kategoriWisataId' => '10',
            'penjelasan' => 'Model Pakaian Terbaru',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //29
            'kategoriWisataId' => '10',
            'penjelasan' => 'Memiliki Tempat Ganti Baju',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //30
            'kategoriWisataId' => '10',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //31
            'kategoriWisataId' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //32
            'kategoriWisataId' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //33
            'kategoriWisataId' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //34
            'kategoriWisataId' => '12',
            'penjelasan' => 'Cepat Saji',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //35
            'kategoriWisataId' => '12',
            'penjelasan' => 'Memiliki Menu Terkenal',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //36
            'kategoriWisataId' => '12',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
