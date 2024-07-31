<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create([
            'nama'      => 'Akuntansi',
            'jenjang'     => 'S1',
            'singkatan'  => 'akt',
        ]);
    }
}
