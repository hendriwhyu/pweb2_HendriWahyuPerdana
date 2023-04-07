<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['name' => "Admin"],
            ['name' => "Petugas"],
            ['name' => "Ketua"],
        ];

        foreach($data as $value)
        Role::insert([
            'role'=>$value['name']
        ]);
    }
}
