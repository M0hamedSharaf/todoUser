<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([

        //     PermissionSeeder::class
        // ]);



        $users = [];
        foreach (range(1, 500) as $index) {
            $users[] = [
                'name' => fake()->name,
                'avatar' => fake()->name,
                'phone' => fake()->PhoneNumber,
                'email' => fake()->email,
                'password' => fake()->password,
            ];
        }
        User::insert($users);
    }
}