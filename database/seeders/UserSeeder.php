<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 10;

        while ($i) {

            $number = rand(1, 3);

            User::factory()->create([
                'role_id' => $number
            ]);

            $i--;
        }
    }
}
