<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 110; $i++) {
            DB::table('customers')->insert([
                'fullname' => fake()->name(),
                'username' => fake()->title(),
                'email' => fake()->unique()->safeEmail(),
                'password' => fake()->password(20, 40),
                'phone' => fake()->phoneNumber()
            ]);
        }
    }
}
