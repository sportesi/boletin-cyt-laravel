<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 20)->create()->each(function (\App\User $u) {
            factory(\App\News::class, 10)->create(['user_id' => $u->id]);
        });
    }
}
