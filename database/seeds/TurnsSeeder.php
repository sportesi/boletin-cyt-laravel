<?php

use Illuminate\Database\Seeder;

class TurnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turns = [
            ['id' => '1', 'name' => 'TM'],
            ['id' => '2', 'name' => 'TT'],
            ['id' => '3', 'name' => 'TN'],
        ];

        foreach ($turns as $turn)
        {
            \App\Turn::create($turn);
        }
    }
}
