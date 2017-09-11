<?php

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
        $roles = [
            [
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'description' => '',
            ],
            [
                'id' => 2,
                'name' => 'student',
                'display_name' => 'Alumno',
                'description' => '',
            ],
            [
                'id' => 3,
                'name' => 'professor',
                'display_name' => 'Profesor',
                'description' => '',
            ],
        ];

        foreach ($roles as $role) {
            \App\Role::create($role);
        }
    }
}
