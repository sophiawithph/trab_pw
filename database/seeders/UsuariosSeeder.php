<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'name'=>'Admin',
            'password'=> Hash::make('123'),
            'email'=>'admin@admin.com',
            'isAdmin'=> 1,
        ],
         [
            'name'=>'Usuario',
            'password'=> Hash::make('123'),
            'email'=>'usuario@usuario.com',
            'isAdmin'=> 0,
         ]);
    }
}
