<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim'       => '2496154006',
            'nama'      => 'Mahasiswa 1',
            'email'     => 'mhs@example.com',
            'prodi_id'  => '1',
            'username'  => '2496154006',
            'password'  => Hash::make('123456'),
            'status'    => '0'
        ]);
    }
}
