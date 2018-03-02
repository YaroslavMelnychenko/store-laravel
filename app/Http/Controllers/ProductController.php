<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    public function showProducts() {
        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->paginate(18);
        return view('store', [
            'categories' => $categories,
            'products' => $products,
            'active' => 'all'
        ]);
    }

    public function getProducts() {
        $products = Product::orderBy('id', 'desc')->paginate(18);
        return $products;
    }

    public function showProductsByCategory($categoryAlias) {
        $categories = Category::all();
        $category = Category::where('alias', $categoryAlias)->first();
        if(!is_null($category)){
            $products = $category->products()->orderBy('id', 'desc')->paginate(18);
            return view('store', [
                'categories' => $categories,
                'products' => $products,
                'active' => $category->alias
            ]);
        } else {
            return redirect('/products');
        }
    }

    public function getProductsByCategory($categoryAlias) {
        $category = Category::where('alias', $categoryAlias)->first();
        $products = $category->products()->orderBy('id', 'desc')->paginate(18);
        return $products;
    }

    public function showProduct($productAlias) {
        $product = Product::where('alias', $productAlias)->first();
        if(!is_null($product)){
            return $product;
        } else {
            return redirect('/products');
        }
    }
}
