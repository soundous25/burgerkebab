<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['nom' => 'Burgers',  'ordre' => 1, 'statut' => true],
            ['nom' => 'Kebabs',   'ordre' => 2, 'statut' => true],
            ['nom' => 'Menus',    'ordre' => 3, 'statut' => true],
            ['nom' => 'Boissons', 'ordre' => 4, 'statut' => true],
            ['nom' => 'Desserts', 'ordre' => 5, 'statut' => true],
            ['nom' => 'Salades',  'ordre' => 6, 'statut' => false],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
