<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin.application@gmail.com',
            'password' => Hash::make('password#1'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        $admin = User::find(1);
        $adminRole = Role::find(1);
        $userRole = Role::find(2);
        $admin->roles()->sync([$adminRole->id,$userRole->id]);
        //$admin->save();
    }
}
