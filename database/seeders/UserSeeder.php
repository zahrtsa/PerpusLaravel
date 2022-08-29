<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'librarian',
            'role' => 'librarian',
            'no_telp' => '0898897667',
            'email' => 'librarian@library.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'guest',
            'role' => 'guest',
            'no_telp' => '0898897667',
            'email' => 'guest@library.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
