<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Inserindo Perfis
        $perfil = \App\Perfil::create(['nome' => "Administrador"]);
        $perfil2 = \App\Perfil::create(['nome' => "Autor"]);

        // Inserindo usuários
        $usuario1 = \App\Usuario::create([
            'nome' => 'Jader Moura',
            'email' => 'Jader@Moura',
            'perfil_id'=>$perfil->id
        ]);
        $usuario2 = \App\Usuario::create([
            'nome' => 'Clarissa Moura',
            'email' => 'clara@Moura',
            'perfil_id'=>$perfil->id
        ]);
        $usuario3 = \App\Usuario::create([
            'nome' => 'Artur Moura',
            'email' => 'artur@Moura',
            'perfil_id'=>$perfil2->id
        ]);
    }
}
