<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 250; $i++) {
            User::create([
                'nik' => fake()->unique()->numerify('##########'), // Membuat NIK unik dengan panjang 10 digit
                'asal_sekolah' => fake()->company, // Nama sekolah diambil dari Faker
                'password' => Hash::make('password'), // Password default "password"
            ]);
        }

        // Output di terminal untuk memastikan seeder berjalan
        $this->command->info('250 users successfully seeded!');
    }
}
