<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
            $usuario = new User();
            $usuario->name = "Inaldo Monteiro";
            $usuario->email = "admin@admin.com";
            $usuario->password = bcrypt("123mudar");
            $usuario->save();       
    }
}
