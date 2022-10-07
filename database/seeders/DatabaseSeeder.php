<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Puesto;
use App\Models\Empleado; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorge Parra',
            'email' => 'jparra@admin.com',
            'password' => bcrypt('1234'),
            'isActive' => true
        ]);
        User::create([
            'name' => 'Ricardo Sanchez',
            'email' => 'ricardo@admin.com',
            'password' => bcrypt('1234'),
            'isActive' => false
        ]);

        Puesto::create([
            'id' => 1,
            'nombre' => 'Contador',
            'descripcion' => 'Administacion de facturas de terceros',
            'sueldo_base' => 9000.00,
            'gratificacion' => 800.00,
            'despensa' => 500.00,
        ]);
        Puesto::create([
            'id' => 2,
            'nombre' => 'Desarrollador',
            'descripcion' => 'programador en laravel',
            'sueldo_base' => 11000.00,
            'gratificacion' => 400.00,
            'despensa' => 200.00,
        ]);
        Puesto::create([
            'id' => 3,
            'nombre' => 'Diseñador',
            'descripcion' => 'personal capacitado para elaboracion de interfaces',
            'sueldo_base' => 8000.00,
            'gratificacion' => 700.00,
            'despensa' => 450.00,
        ]);

        Empleado::factory()->count(24)->create();
    }
}
