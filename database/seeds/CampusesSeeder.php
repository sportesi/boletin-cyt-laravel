<?php

use Illuminate\Database\Seeder;

class CampusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = [
            ['id' => '1', 'name' => 'Centro'],
            ['id' => '3', 'name' => 'Lomas de Zamora'],
            ['id' => '4', 'name' => 'Castelar'],
            ['id' => '8', 'name' => 'Boulogne'],
            ['id' => '10', 'name' => 'Rosario'],
        ];

        foreach ($campuses as $campus) {
            \App\Campus::create($campus);
        }
    }
}
