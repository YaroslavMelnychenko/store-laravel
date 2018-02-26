<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class StoreController extends Controller
{
    public function showProducts() {
        $products = Product::orderBy('id', 'desc')->paginate(18);
        $categories = Category::all();
        return view('store', [
            'name' => 'Магазин',
            'show' => '',
            'products' => $products,
            'categories' => $categories,
            'current' => 'all'
        ]);
    }

    public function showLoginForm() {
        return view('store', [
            'name' => 'Авторизація',
            'show' => 'login',
            'products' => null,
            'categories' => null,
            'current' => 'all'
        ]);
    }

    public function showRegistrationForm() {
        return view('store', [
            'name' => 'Авторизація',
            'show' => 'register',
            'products' => null,
            'categories' => null,
            'current' => 'all'
        ]);
    }

    public function filterCategory($categoryAlias) {
        $category = Category::where('alias', $categoryAlias)->first();
        $categories = Category::all();
        if(!is_null($category)){
            $products = $category->products()->orderBy('id', 'desc')->paginate(18);
            return view('store',[
                'name' => 'Магазин',
                'show' => '',
                'products' => $products,
                'categories' => $categories,
                'current' => $categoryAlias
            ]);
        } else {
            return redirect('/');
        }
    }

    public function getProducts() {
        $products = Product::orderBy('id', 'desc')->paginate(18);
        return $products;
    }

    public function getProductsByCategory($categoryAlias) {
        $category = Category::where('alias', $categoryAlias)->first();
        $products = $category->products()->orderBy('id', 'desc')->paginate(18);
        return $products;
    }
}
