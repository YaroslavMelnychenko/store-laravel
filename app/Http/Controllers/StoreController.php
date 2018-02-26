<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        return view('store', ['name' => 'Магазин', 'show' => '']);
    }

    public function showLoginForm() {
        return view('store', ['name' => 'Авторизація', 'show' => 'login']);
    }

    public function showRegistrationForm() {
        return view('store', ['name' => 'Авторизація', 'show' => 'register']);
    }
}
