<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $gender = fake()->randomElement(['Laki-laki', 'Perempuan']);
            DB::table('students')->insert([
                'nama' => $gender === 'Laki-laki' ? fake()->name('male') :
                fake('id_ID')->name('female'),

                'email' => fake()->unique()->safeEmail(),

                'kelas' => fake()->randomElement(['X', 'XI', 'XII']),

                'jurusan' => fake()->randomElement(['tkr', 'rpl', 'tkj']),

                'alamat' => fake('id_ID')->address(),

                'jenis_kelamin' => $gender,
                
                'created_at' => now(),


            ]);
        }
    }
}
