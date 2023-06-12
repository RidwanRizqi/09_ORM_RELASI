<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '121212121',
            'nama' => 'Test User',
            'kelas' => 'MI-2E',
            'jurusan' => 'MI',
            'no_handphone' => '1213422121',
            'email' => 'test@gmail.com',
            'tanggal_lahir' => '12-12-2021',
        ]);

        Mahasiswa::create([
            'nim' => '121212322',
            'nama' => 'Test User 2',
            'kelas' => 'MI-3E',
            'jurusan' => 'MI',
            'no_handphone' => '12143422122',
            'email' => 'test2@gmail.com',
            'tanggal_lahir' => '12-06-2021',
        ]);


        Mahasiswa::create([
            'nim' => '121214322',
            'nama' => 'Test User 3',
            'kelas' => 'MI-3E',
            'jurusan' => 'MI',
            'no_handphone' => '1432532',
            'email' => 'test3@gmail.com',
            'tanggal_lahir' => '11-06-2021',
        ]);

        Mahasiswa::create([
            'nim' => '121214522',
            'nama' => 'Test User 4',
            'kelas' => 'MI-3E',
            'jurusan' => 'MI',
            'no_handphone' => '1432532',
            'email' => 'test4@gmail.com',
            'tanggal_lahir' => '11-06-2021',
        ]);

        Mahasiswa::create([
            'nim' => '125214322',
            'nama' => 'Test User 5',
            'kelas' => 'MI-3E',
            'jurusan' => 'MI',
            'no_handphone' => '1432532',
            'email' => 'test5@gmail.com',
            'tanggal_lahir' => '11-06-2021',
        ]);

        Mahasiswa::create([
            'nim' => '181214322',
            'nama' => 'Test User 6',
            'kelas' => 'MI-3E',
            'jurusan' => 'MI',
            'no_handphone' => '1432532',
            'email' => 'test6@gmail.com',
            'tanggal_lahir' => '11-06-2021',
        ]);
    }
}
