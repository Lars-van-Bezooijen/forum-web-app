<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Lars',
            'email' => 'lars@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Piet',
            'email' => 'piet@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Henk',
            'email' => 'henk@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Jan',
            'email' => 'jan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Grietje',
            'email' => 'grietje@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Klaas',
            'email' => 'klaas@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Pieter',
            'email' => 'pieter]@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
