<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleUserFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            // 'name' => Str::upper('ROLE_' . Str::random(6)),
            'status'=> 'ACT',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
