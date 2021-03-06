<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'admin@l5.com',
            'password' => Hash::make('admin156*'),
            'name' => 'admin',
        ]);
    }
}