<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Rule;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $rules = Rule::all();

        $filteredRules = $request->get('rules') ?? [];

    
        $productList = Product::with('rules')
                        ->whereHas('rules', function ($query) use ($filteredRules) {
                            if($filteredRules)
                                $query->whereIn('rule_id', $filteredRules);
                        })
                        ->get();
                        
                       
        return view('product-list', compact('productList', 'rules', 'filteredRules'));
    }
}
