<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            // 'nama_pengguna' => 'user',
            // 'email' => 'hendri@gmail.com',
            // 'password' => Hash::make('hendri123'),
            // 'id_role' => 1 // Ubah sesuai id_role yang diinginkan
            'nama_pengguna' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 2 // Ubah sesuai id_role yang diinginkan
        ]);
        User::create([
            'nama_pengguna' => 'user',
            'email' => 'hendri@gmail.com',
            'password' => Hash::make('hendri123'),
            'id_role' => 1 // Ubah sesuai id_role yang diinginkan
            // 'nama_pengguna' => 'petugas',
            // 'email' => 'petugas@gmail.com',
            // 'password' => Hash::make('password'),
            // 'id_role' => 2 // Ubah sesuai id_role yang diinginkan
        ]);

        // User::factory()->count(10)->create();
    }
}
