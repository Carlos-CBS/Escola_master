<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@clotfje.net',
            'password' => Hash::make('ClotFje2425#'),
            'role' => 'Administrador',
        ]);

        User::create([
            'name' => 'Consultor',
            'email' => 'consultor@clotfje.net',
            'password' => Hash::make('FjeClot2425@'),
            'role' => 'Consultor',
        ]);
}
}
