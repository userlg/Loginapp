<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $limit = 2;

        $roles = ['user', 'guest', 'admin'];

        while ($limit >= 0) {

            Role::factory()->create([
                'role' => $roles[$limit],
            ]);

            $limit--;
        }
    }
}
