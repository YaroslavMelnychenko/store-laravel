<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class StoreController extends Controller
{
    public function showProducts() {
        $products = Product::orderBy('id', 'desc')->paginate(18);
        return view('store', ['name' => 'Магазин', 'show' => '', 'products' => $products]);
    }

    public function showLoginForm() {
        return view('store', ['name' => 'Авторизація', 'show' => 'login', 'products' => null]);
    }

    public function showRegistrationForm() {
        return view('store', ['name' => 'Авторизація', 'show' => 'register', 'products' => null]);
    }
}
