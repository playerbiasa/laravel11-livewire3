<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'Staf Administrasi',
            'email'     => 'admin@example.com',
            'username'  => 'admin',
            'password'  => Hash::make('123456'),
            'status'    => '1'
        ]);
    }
}
