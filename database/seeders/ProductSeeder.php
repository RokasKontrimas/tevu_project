<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['title' => 'Skerdiena', 'price' => 5.5, 'image' => 'images/broileris.jpg'],
            ['title' => 'Sparneliai', 'price' => 4.2, 'image' => 'images/sparneliai.jpg'],
            ['title' => 'Krūtinėlė', 'price' => 7.8, 'image' => 'images/krutinele.jpg'],
            ['title' => 'Ketvirčiai', 'price' => 5.2, 'image' => 'images/Ketvirtis.jpg'],
            ['title' => 'Sriubos Rinkinys', 'price' => 2.5, 'image' => 'images/sriubos_rinkinys.jpg'],
            ['title' => 'Subproduktai', 'price' => 3.3, 'image' => 'images/subproduktai.jpg']

        ]);
    }
}
// Skerdiena	5.5	broileris.jpg
// Sparneliai	3.5	sparneliai.jpg
// Krūtinėlė	7	krutinele.jpg
// Ketvirčiai	4.5	Ketvirtis.jpg
// Sriubos Rinkinys	2.5	sriubos_rinkinys.jpg
// Subproduktai	2.5	subproduktai.jpg
