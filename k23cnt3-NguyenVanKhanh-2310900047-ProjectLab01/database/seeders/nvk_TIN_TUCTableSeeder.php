<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class nvk_TIN_TUCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insert 10 rows of fake data into the 'nvk_TIN_TUC' table
        for ($i = 0; $i < 10; $i++) {
            DB::table('nvk_tin_tuc')->insert([
                'nvkMaTT' => $faker->unique()->word, // Unique identifier for the news article
                'nvkTieuDe' => $faker->sentence, // Title of the news article
                'nvkMoTa' => $faker->text(200), // Description (shorter text)
                'nvkNoiDung' => $faker->paragraph(5), // Content (longer text)
                'nvkNgayDangTin' => $faker->dateTimeThisYear(), // Random date/time within the current year
                'nvkNgayCapNhat' => $faker->dateTimeThisYear(), // Random date/time within the current year
                'nvkHinhAnh' => $faker->imageUrl(), // Random image URL
                'nvkTrangThai' => $faker->numberBetween(0, 1), // Status (0 or 1, assuming binary status)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
