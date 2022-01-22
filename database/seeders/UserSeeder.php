<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ricardo Lindarte Ortega',
            'email' => 'r@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::create([
            'name' => 'Ri rtega',
            'email' => 'l@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Blogger');
        User::factory(8)->create();
    }
}
