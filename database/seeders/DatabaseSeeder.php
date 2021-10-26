<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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

        $faker = Faker::create('id_ID');
        for($i=1;$i<=5;$i++){
            DB::table('mahasiswas')->insert([
                'nama'=>$faker->name(),
                'nim'=>$faker->numberBetween(1010100000,3030300000),
                'tanggal_lahir'=>$faker->date(),
                'alamat'=>$faker->address(),
                'tahun_masuk'=>$faker->numberBetween(2016,2021),
            ]);
            DB::table('dosens')->insert([
                'nama'=>$faker->name(),
                'nidn'=>$faker->numberBetween(1010100,3030300),
                'alamat'=>$faker->address(),
                'kontak'=>$faker->phoneNumber(),
            ]);
        }
    }
}
