<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role1 = Role::create(['name' => 'Admin']);
    $role2 = Role::create(['name' => 'Usuario']);

    Permission::create(['name' => 'agenda.gestionHoras'])->syncRoles($role1);



    Permission::create(['name' => 'ruta.horas'])->syncRoles($role1);

    User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.cl',
        'password' => bcrypt('12345678')
    ])->assignRole('Admin');

    }
}
