<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
            'name' => 'ROLE_ADMIN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Role::factory()->create([
        'name' => 'ROLE_USER',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
        Role::factory(3)->create();
    }
}
