<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(KriteriaTambahanUntukSawSeeder::class);
        $this->call(KriteriaUmumAreaParkirSeeder::class);
        $this->call(KriteriaUmumJarakSeeder::class);
        $this->call(TempatWisataSeeder::class);
        $this->call(KelurahanSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KategoriWisataSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
