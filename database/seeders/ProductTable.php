<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =  [
            ['name' => 'class A'],
             ['name' => 'class B'],
              ['name' => 'class C'],
               ['name' => 'class D'],
                ['name' => 'class E'],
                 ['name' => 'class F'],
                  ['name' => 'class G']
        ];
        
        
    
        Product::insert($products);
    }
}
