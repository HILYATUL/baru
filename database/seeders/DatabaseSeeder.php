<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Mahasiswa::create([
            'nim' => '33',
            'nama' => 'indri',
            'prodi' => 'peternakan',
        ]);
        Mahasiswa::create([
            'nim' => '11',
            'nama' => 'nela izz',
            'prodi' => 'perikanan',
        ]);
        Mahasiswa::create([
            'nim' => '5',
            'nama' => 'izz',
            'prodi' => 'perikanan',
        ]);
    }
}
