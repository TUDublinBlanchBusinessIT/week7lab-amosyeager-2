<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public function displayGrid(Request $request)
    {
        $products = Product::all();
        return view('products.displaygrid')->with('products', $products);
    }
}
