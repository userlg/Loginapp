<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Role;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command allow to Create the Roles';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $roles = ['user', 'admin'];

        $limit = 1;

        if (count(Role::all()) == 0) {

            while ($limit >= 0) {

                Role::factory()->create([
                    'role' => $roles[$limit],
                ]);

                $limit--;
            }
        }
    }
}
