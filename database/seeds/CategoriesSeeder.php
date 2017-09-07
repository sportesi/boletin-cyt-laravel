<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 49, 'name' => 'Fisica y Química', 'status' => false, 'deleted' => false],
            ['id' => 50, 'name' => 'Matematica y Lógica', 'status' => false, 'deleted' => false],
            ['id' => 51, 'name' => 'Robótica e Inteligencia Artificial', 'status' => true, 'deleted' => false],
            ['id' => 52, 'name' => 'Software', 'status' => true, 'deleted' => false],
            ['id' => 53, 'name' => 'Almacenamiento y Memorias', 'status' => false, 'deleted' => false],
            ['id' => 54, 'name' => 'Circuitos Integrados', 'status' => true, 'deleted' => true],
            ['id' => 55, 'name' => 'Comunicaciones', 'status' => true, 'deleted' => false],
            ['id' => 56, 'name' => 'Computación Cuántica', 'status' => true, 'deleted' => false],
            ['id' => 57, 'name' => 'Nanotecnologia', 'status' => true, 'deleted' => false],
            ['id' => 58, 'name' => 'Politicas y Ética', 'status' => false, 'deleted' => false],
            ['id' => 59, 'name' => 'Periféricos y Auxiliares', 'status' => false, 'deleted' => false],
            ['id' => 60, 'name' => 'Salud ', 'status' => true, 'deleted' => false],
            ['id' => 61, 'name' => 'Fuentes RRS varias', 'status' => true, 'deleted' => true],
            ['id' => 62, 'name' => 'IT & Infraestuctura Informática', 'status' => true, 'deleted' => true],
            ['id' => 63, 'name' => 'Seguridad Informática', 'status' => true, 'deleted' => false],
            ['id' => 64, 'name' => 'Otros', 'status' => true, 'deleted' => false],
            ['id' => 68, 'name' => 'Ciencias Básicas', 'status' => true, 'deleted' => false],
            ['id' => 69, 'name' => 'Hardware', 'status' => true, 'deleted' => false],
        ];

        foreach ($categories as $category) {
            \App\Category::create($category);
        }
    }
}
