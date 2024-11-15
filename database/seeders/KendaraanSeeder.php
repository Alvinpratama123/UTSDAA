<?php

namespace Database\Seeders;

use App\Models\DataKendaraan;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DataKendaraan::create([
                'merk' => $faker->randomElement(['Toyota', 'Honda', 'Suzuki', 'Nissan']),
                'model' => $faker->word(),
                'tahun' => $faker->year(),
                'warna' => $faker->safeColorName(),
                'nomor_polisi' => strtoupper($faker->bothify('?? #### ??')),
                'harga' => $faker->numberBetween(50000000, 500000000),
                'jenis_kendaraan' => $faker->randomElement(['Mobil', 'Motor']),
            ]);
        }
    }
}
