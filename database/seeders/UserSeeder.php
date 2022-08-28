<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'admin',
            'email' => 'admin@library.com',
            'role' => 'admin',
            'no_telp' => '0866732898',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'librarian',
            'role' => 'librarian',
            'no_telp' => '0898897667',
            'email' => 'librarian@library.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'guest',
            'role' => 'guest',
            'no_telp' => '0898897667',
            'email' => 'guest@library.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
