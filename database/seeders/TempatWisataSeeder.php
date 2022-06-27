<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempat_wisatas')->insert([
            //1
            'nama' => 'Waterboom Banua Anyar',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 6,
            'kelurahanId' => 34,
            'latitude' => -3.3083871335681000,
            'longitude' => 114.6192609643780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //2
            'nama' => 'Alfin WaterBoom',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 6,
            'kelurahanId' => 15,
            'latitude' => -3.3395709036366500,
            'longitude' => 114.5884279496790000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //3
            'nama' => 'Borneo Mini Waterpark',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 6,
            'kelurahanId' => 43,
            'latitude' => -3.2798105331001600,
            'longitude' => 114.5763661643530000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //4
            'nama' => 'Kolam Renang Gelanggang Olaharaga Hasanudin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 6,
            'kelurahanId' => 32,
            'latitude' => -3.3264789446046900,
            'longitude' => 114.6034472803230000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //5
            'nama' => 'Trans Studio Mini Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 4,
            'kelurahanId' => 28,
            'latitude' => -3.3239447613499600,
            'longitude' => 114.6026038674690000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //6
            'nama' => 'Kid\s Zone',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 4,
            'kelurahanId' => 28,
            'latitude' => -3.3221563002235200,
            'longitude' => 114.6030056085430000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //7
            'nama' => 'Kidzooona duta mall Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 4,
            'kelurahanId' => 28,
            'latitude' => -3.3228244390625700,
            'longitude' => 114.6029607674680000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //8
            'nama' => 'Arena Bermain Anak DD',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 4,
            'kelurahanId' => 14,
            'latitude' => -3.3576148268262000,
            'longitude' => 114.5984527245340000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //9
            'nama' => 'Taman nol km',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 22,
            'latitude' => -3.3150443177046500,
            'longitude' => 114.5925079285310000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //10
            'nama' => 'Taman kamboja',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 25,
            'latitude' => -3.3221063613711700,
            'longitude' => 114.5872058674680000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //11
            'nama' => 'Taman Banjarmasin Bungas',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 29,
            'latitude' => -3.3048549886528300,
            'longitude' => 114.5882396109840000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //12
            'nama' => 'Taman Edukasi Kota Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 28,
            'latitude' => -3.3240460683993900,
            'longitude' => 114.6023150508240000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //13
            'nama' => 'Taman Siring Sungai Martapura',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 23,
            'latitude' => -3.3195063985214100,
            'longitude' => 114.5934329351540000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //14
            'nama' => 'Hutan Kota Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 22,
            'latitude' => -3.3200629859885000,
            'longitude' => 114.5919063937980000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tempat_wisatas')->insert([
            //15
            'nama' => 'Taman Bungas',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 31,
            'latitude' => -3.3132261305670500,
            'longitude' => 114.5937051588150000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //16
            'nama' => 'Taman Kota Korem Antasari 101',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 5,
            'kelurahanId' => 25,
            'latitude' => -3.3209315663969400,
            'longitude' => 114.5927738432240000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //17
            'nama' => 'Masjid Raya Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 22,
            'latitude' => -3.3189530391178700,
            'longitude' => 114.5912444496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //18
            'nama' => 'Masjid AL JIhad',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 25,
            'latitude' => -3.3226305383675400,
            'longitude' => 114.5859183871090000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //19
            'nama' => 'Masjid Bersejarah Sultan Suriansyah',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 47,
            'latitude' => -3.2943389616915900,
            'longitude' => 114.5761158791220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //20
            'nama' => 'Masjid Ar Raudah',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 50,
            'latitude' => -3.2856978846390200,
            'longitude' => 114.6121974177290000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //21
            'nama' => 'Masjid Jami Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 50,
            'latitude' => -3.3066485950888900,
            'longitude' => 114.5953640785110000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //22
            'nama' => 'Masjid Hasanuddin madjedi',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 48,
            'latitude' => -3.2890432784390000,
            'longitude' => 114.5888432785090000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //23
            'nama' => 'Masjid Imam Syafi\'i Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 7,
            'kelurahanId' => 20,
            'latitude' => -3.3569490281493600,
            'longitude' => 114.6156620963080000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //24
            'nama' => 'Ramayana Pasar Sentra Antasari',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 10,
            'kelurahanId' => 38,
            'latitude' => -3.3288324273938800,
            'longitude' => 114.5982687852600000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //25
            'nama' => 'Ramayana Plaza Mitra',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 10,
            'kelurahanId' => 30,
            'latitude' => -3.3265852844251700,
            'longitude' => 114.5965091607220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //26
            'nama' => 'Matahari Duta Mall',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 10,
            'kelurahanId' => 28,
            'latitude' => -3.3228271553992900,
            'longitude' => 114.6029581355820000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //27
            'nama' => 'Hawai Sarana Busana',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 10,
            'kelurahanId' => 30,
            'latitude' => -3.3263118030957500,
            'longitude' => 114.5963512189920000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //28
            'nama' => 'Lima Cahaya Ayani Department Store',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 10,
            'kelurahanId' => 20,
            'latitude' => -3.3441379611169900,
            'longitude' => 114.6216892208440000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //29
            'nama' => 'Pizza Hut Delivery PHD Indonesia',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 48,
            'latitude' => -3.2922253505900600,
            'longitude' => 114.5892198852510000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //30
            'nama' => 'Pizza Hut Restoran Duta Mall Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 28,
            'latitude' => -3.3189560692044500,
            'longitude' => 114.6059395064590000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //31
            'nama' => 'Pizza Hut Restoran',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 35,
            'latitude' => -3.3301889322805000,
            'longitude' => 114.6111023760610000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //32
            'nama' => 'KFC Duta Mall',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 28,
            'latitude' => -3.3224770201466400,
            'longitude' => 114.6032486795740000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //33
            'nama' => 'Wisata Kuliner Kampung Arab',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 29,
            'latitude' => -3.3045591735872100,
            'longitude' => 114.5882271225730000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //34
            'nama' => 'Restoran SEDERHANA Masakan Padang',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 20,
            'latitude' => -3.3423967846901000,
            'longitude' => 114.6204411202450000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //35
            'nama' => 'Restoran Lima Rasa',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 36,
            'latitude' => -3.3274407389967600,
            'longitude' => 114.6084628318870000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //36
            'nama' => 'Depot Sari Patin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 12,
            'kelurahanId' => 51,
            'latitude' => -3.3011923505798200,
            'longitude' => 114.5896588496750000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //37
            'nama' => 'Gereja Bethany Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 51,
            'latitude' => -3.2902117173147200,
            'longitude' => 114.5901343539720000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //38
            'nama' => 'Gereja Yesus Sejati Gatsu',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 37,
            'latitude' => -3.3254057059468100,
            'longitude' => 114.6173247275780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //39
            'nama' => 'GKPS Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 3,
            'latitude' => -3.3065210396007700,
            'longitude' => 114.5872288496760000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //40
            'nama' => 'Gereja Toraja Jemaat Kota Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 33,
            'latitude' => -3.3115181169533400,
            'longitude' => 114.5735066496760000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //41
            'nama' => 'Gereja Indonesia Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 33,
            'latitude' => -3.3178586502910500,
            'longitude' => 114.5774365410840000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //42
            'nama' => 'GKE Eppata',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 22,
            'latitude' => -3.3154928060083900,
            'longitude' => 114.5908723601220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //43
            'nama' => 'Gereja Katolik Hati Yesus Yang Maha Kudus',
            'linkInternet' => Str::random(10),
            'isAktif' => true,
            'kategoriWisataId' => 8,
            'kelurahanId' => 28,
            'latitude' => -3.3200244613952000,
            'longitude' => 114.6006001496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //44
            'nama' => 'Katedral Keluarga Kudus',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 24,
            'latitude' => -3.3246291390368400,
            'longitude' => 114.5906601674690000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //45
            'nama' => 'Gereja GKE Hosiana',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 33,
            'latitude' => -3.3126853060256200,
            'longitude' => 114.5741773429300000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //46
            'nama' => 'HKBP Gereja Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 33,
            'latitude' => -3.3133485723737000,
            'longitude' => 114.5723215361830000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //47
            'nama' => 'Gereja Yesus Sejati Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 23,
            'latitude' => -3.3200538047109300,
            'longitude' => 114.5950379496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //48
            'nama' => 'GBI Kingdom of God Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 23,
            'latitude' => -3.3208865613852500,
            'longitude' => 114.5950749496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //49
            'nama' => 'GBI Pak Niko Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 23,
            'latitude' => -3.3210562836788100,
            'longitude' => 114.5949526208410000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //50
            'nama' => 'Gereja HKBP Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 8,
            'kelurahanId' => 24,
            'latitude' => -3.3237455306186800,
            'longitude' => 114.5898565849650000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
