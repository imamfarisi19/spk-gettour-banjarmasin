<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelurahans')->insert([
            //1
            'nama' => 'Basirih',
            'kecamatanId' => 1,
            'latitude' => -3.3384438190109800,
            'longitude' => 114.5688192401920000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //2
            'nama' => 'Belitung Selatan',
            'kecamatanId' => 1,
            'latitude' => -3.3093321354844500,
            'longitude' => 114.5792063507190000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //3
            'nama' => 'Belitung Utara',
            'kecamatanId' => 1,
            'latitude' => -3.3052388084977100,
            'longitude' => 114.5814373502220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //4
            'nama' => 'Kuin Cerucuk',
            'kecamatanId' => 1,
            'latitude' => -3.3049613941521400,
            'longitude' => 114.5703009090830000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //5
            'nama' => 'Kuin Selatan',
            'kecamatanId' => 1,
            'latitude' => -3.2995639548720800,
            'longitude' => 114.5784546688730000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //6
            'nama' => 'Pelambuan',
            'kecamatanId' => 1,
            'latitude' => -3.3204716289930300,
            'longitude' => 114.5694416991130000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //7
            'nama' => 'Telaga Biru',
            'kecamatanId' => 1,
            'latitude' => -3.3280981980823700,
            'longitude' => 114.5673164671970000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //8
            'nama' => 'Telawang',
            'kecamatanId' => 1,
            'latitude' => -3.3305822901562900,
            'longitude' => 114.5829179723170000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //9
            'nama' => 'Teluk Tiram',
            'kecamatanId' => 1,
            'latitude' => -3.3392561829070200,
            'longitude' => 114.5821671067510000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //10
            'nama' => 'Basirih Selatan',
            'kecamatanId' => 2,
            'latitude' => -3.3450176756916000,
            'longitude' => 114.5705810159210000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('kelurahans')->insert([
            //11
            'nama' => 'Kelayan Barat',
            'kecamatanId' => 2,
            'latitude' => -3.3297031052139300,
            'longitude' => 114.5940528906720000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //12
            'nama' => 'Kelayan Dalam',
            'kecamatanId' => 2,
            'latitude' => -3.3348009048477000,
            'longitude' => 114.5977664225520000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //13
            'nama' => 'Kelayan Tengah',
            'kecamatanId' => 2,
            'latitude' => -3.3348662138729300,
            'longitude' => 114.5947835270780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //14
            'nama' => 'Kelayan Timur',
            'kecamatanId' => 2,
            'latitude' => -3.3516603026149300,
            'longitude' => 114.5925725003120000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //15
            'nama' => 'Kelayan Selatan',
            'kecamatanId' => 2,
            'latitude' => -3.3473550751746800,
            'longitude' => 114.5806842562600000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //16
            'nama' => 'Mantuil',
            'kecamatanId' => 2,
            'latitude' => -3.3433392873776600,
            'longitude' => 114.5569253383340000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //17
            'nama' => 'Murung Raya',
            'kecamatanId' => 2,
            'latitude' => -3.3411643748878500,
            'longitude' => 114.5970144196690000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //18
            'nama' => 'Pekauman',
            'kecamatanId' => 2,
            'latitude' => -3.3326825117372500,
            'longitude' => 114.5903422312550000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //17
            'nama' => 'Pemurus Baru',
            'kecamatanId' => 2,
            'latitude' => -3.3419566021272000,
            'longitude' => 114.6103832588590000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //18
            'nama' => 'Pemurus Dalam',
            'kecamatanId' => 2,
            'latitude' => -3.3556453756181600,
            'longitude' => 114.6163258900560000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //19
            'nama' => 'Tanjung Pagar',
            'kecamatanId' => 2,
            'latitude' => -3.3559657473681500,
            'longitude' => 114.6044396638660000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //20
            'nama' => 'Antasan Besar',
            'kecamatanId' => 2,
            'latitude' => -3.3392561829070200,
            'longitude' => 114.5821671067510000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //21
            'nama' => 'Tanjung Pagar',
            'kecamatanId' => 2,
            'latitude' => -3.3559657473681500,
            'longitude' => 114.6044396638660000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //22
            'nama' => 'Antasan Besar',
            'kecamatanId' => 3,
            'latitude' => -3.3160143030374200,
            'longitude' => 114.5881104004300000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //23
            'nama' => 'Gadang',
            'kecamatanId' => 3,
            'latitude' => -3.3186919464081500,
            'longitude' => 114.5962857336470000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //24
            'nama' => 'Kertak Baru Ilir',
            'kecamatanId' => 3,
            'latitude' => -3.3257635883778400,
            'longitude' => 114.5903417678740000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //25
            'nama' => 'Kertak Baru Ulu',
            'kecamatanId' => 3,
            'latitude' => -3.3226774799865700,
            'longitude' => 114.5912422345310000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //26
            'nama' => 'Kelayan Luar',
            'kecamatanId' => 3,
            'latitude' => -3.3291269492233100,
            'longitude' => 114.5967569406400000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //27
            'nama' => 'Mawar',
            'kecamatanId' => 3,
            'latitude' => -3.3250531883141100,
            'longitude' => 114.5815437085270000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //28
            'nama' => 'Melayu',
            'kecamatanId' => 3,
            'latitude' => -3.3179445564154300,
            'longitude' => 114.6029590265780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //29
            'nama' => 'Pasar Lama',
            'kecamatanId' => 3,
            'latitude' => -3.3090296554536800,
            'longitude' => 114.5910706829610000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //30
            'nama' => 'Pekapuran Laut',
            'kecamatanId' => 3,
            'latitude' => -3.3266847315066800,
            'longitude' => 114.5992480998860000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //31
            'nama' => 'Seberang Masjid',
            'kecamatanId' => 3,
            'latitude' => -3.3134888928809000,
            'longitude' => 114.5970147583030000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //32
            'nama' => 'Sungai Baru',
            'kecamatanId' => 3,
            'latitude' => -3.3243274653351400,
            'longitude' => 114.6007270492060000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //33
            'nama' => 'Teluk Dalam',
            'kecamatanId' => 3,
            'latitude' => -3.3196802887451200,
            'longitude' => 114.5806855772110000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //34
            'nama' => 'Benua Anyar',
            'kecamatanId' => 4,
            'latitude' => -3.3069112333496100,
            'longitude' => 114.6128726071750000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //35
            'nama' => 'Karang Mekar',
            'kecamatanId' => 4,
            'latitude' => -3.3316946286300900,
            'longitude' => 114.6059195705390000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //36
            'nama' => 'Kebun Bunga',
            'kecamatanId' => 4,
            'latitude' => -3.3291459560118500,
            'longitude' => 114.6148255316450000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //37
            'nama' => 'Kuripan',
            'kecamatanId' => 4,
            'latitude' => -3.3266827631677400,
            'longitude' => 114.6207682486450000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //38
            'nama' => 'Pekapuran Raya',
            'kecamatanId' => 4,
            'latitude' => -3.3357226611892600,
            'longitude' => 114.6066704206010000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //39
            'nama' => 'Pemurus Luar',
            'kecamatanId' => 4,
            'latitude' => -3.3505496100322800,
            'longitude' => 114.6341378587840000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //40
            'nama' => 'Pengambangan',
            'kecamatanId' => 4,
            'latitude' => -3.3200651498307400,
            'longitude' => 114.6206189415780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //41
            'nama' => 'Sungai Bilu',
            'kecamatanId' => 4,
            'latitude' => -3.3177063206167200,
            'longitude' => 114.6118632973530000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //42
            'nama' => 'Sungai Lulut',
            'kecamatanId' => 4,
            'latitude' => -3.3319314883231100,
            'longitude' => 114.6400818994390000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //43
            'nama' => 'Alalak Utara',
            'kecamatanId' => 5,
            'latitude' => -3.2826413512144000,
            'longitude' => 114.5866287577020000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //44
            'nama' => 'Alalak Tengah',
            'kecamatanId' => 5,
            'latitude' => -3.2749916804735500,
            'longitude' => 114.5703006792080000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //45
            'nama' => 'Alalak Selatan',
            'kecamatanId' => 5,
            'latitude' => -3.2865161096962700,
            'longitude' => 114.5703003223670000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //46
            'nama' => 'Antasan Kecil Timur',
            'kecamatanId' => 5,
            'latitude' => -3.3043396138354000,
            'longitude' => 114.5940546196830000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //47
            'nama' => 'Kuin Utara',
            'kecamatanId' => 5,
            'latitude' => -3.2909734088497800,
            'longitude' => 114.5762428842220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //48
            'nama' => 'Pangeran',
            'kecamatanId' => 5,
            'latitude' => -3.2964565064719200,
            'longitude' => 114.5866284343280000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //49
            'nama' => 'Sungai Andai',
            'kecamatanId' => 5,
            'latitude' => -3.2917031022787000,
            'longitude' => 114.6049113731420000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('kelurahans')->insert([
            //50
            'nama' => 'Sungai Jingah',
            'kecamatanId' => 5,
            'latitude' => -3.3008495102950200,
            'longitude' => 114.6079351950570000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //51
            'nama' => 'Sungai Miai',
            'kecamatanId' => 5,
            'latitude' => -3.2928169623833500,
            'longitude' => 114.5940546699090000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kelurahans')->insert([
            //52
            'nama' => 'Sungai Mufti',
            'kecamatanId' => 5,
            'latitude' => -3.3041920289900200,
            'longitude' => 114.5999971416930000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
