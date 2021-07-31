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
            'name' => 'Daniel Chuc Ceballos',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
