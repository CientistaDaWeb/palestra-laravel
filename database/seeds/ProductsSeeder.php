<?php

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categories::class, 10)->create();
        factory(Products::class, 40)->create()->each(
            function ($product) {
                $categories = Categories::select(['id'])->get()->random(random_int(1, 5));
                $categoriesIds = $categories->map(
                    function ($category) {
                        return $category->id;
                    }
                );
                $product->categories()->sync($categoriesIds);
            }
        );
    }
}
