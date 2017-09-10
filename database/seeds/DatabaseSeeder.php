<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(CampusesSeeder::class);
        $this->call(TurnsSeeder::class);
        $this->call(UserSeeder::class);
    }
}
