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

            factory(\App\News::class, 10)->create([
                'user_id' => $u->id,
                'category_id' => \App\Category::where('status', 1)
                    ->where('deleted', 0)
                    ->inRandomOrder()
                    ->get()
                    ->first()
            ]);

            $u->roles()->attach(2);
        });

        $user = new \App\User([
            'name' => 'Sebastian Portesi',
            'email' => 'sebastian@example.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10),
            'turn_id' => 1,
            'campus_id' => 1,
            'year' => 2017,
            'comission' => 'A',
            'validated' => true,
        ]);
        $user->save();
        $user->roles()->attach(1);
    }
}
