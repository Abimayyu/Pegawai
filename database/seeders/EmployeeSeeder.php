<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $adminUsers = User::where('role', 'admin')->get();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $created_at = $faker->dateTimeBetween('-1 year', 'now');
            $updated_at = $faker->dateTimeBetween($created_at, 'now');

            $data[] = [
                'name' => $faker->name,
                'nip' => $faker->unique()->numerify('##############'),
                'position' => $faker->jobTitle,               // Jabatan
                'departement' => $faker->word,                // Departemen
                'salary' => $faker->numberBetween(3000000, 10000000),   // Gaji antara 3 juta dan 10 juta
                'join_date' => $faker->date('Y-m-d', '2020-01-01'), // Tanggal bergabung (format Y-m-d)
                'created_by' => $adminUsers->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('employees')->insert($data);
    }
}
