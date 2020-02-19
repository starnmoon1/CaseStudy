<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Category::class, 1)->create()->each(function ($category) {
            for ($i=0; $i < 5; $i++) {
                $category->products()->save(factory(App\Product::class)->make());
            }
        });
    }
}
