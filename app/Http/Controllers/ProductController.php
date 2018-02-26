<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($productAlias) {
        $product = Product::where('alias', $productAlias)->first();
        if(!is_null($product)){
            dd($product);
        } else {
            return redirect('/');
        }
    }
}
