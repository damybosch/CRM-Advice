<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Damy Bosch',
            'email' => 'd.bosch@idigitized.com',
            'role' => 'admin',
            'isActive' => 1,
            'password' => Hash::make('password'),   
        ]);

        User::create([
            'name' => 'Lisa Timmer Arends',
            'email' => 'l.timmerarends@idigitized.com',
            'role' => 'admin',
            'isActive' => 1,
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'j.doe@idigitized.com',
            'role' => 'user',
            'isActive' => 0,
            'password' => Hash::make('password'),
        ]);
    }
}
