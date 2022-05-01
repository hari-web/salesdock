<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Rule;

class ProductRules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        foreach($products as $product) {
            
            $rules = Rule::inRandomOrder()->limit(3)->pluck('id');
            
          

            $product->rules()->sync($rules);
        }


    }
}
