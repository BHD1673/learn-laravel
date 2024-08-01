<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->get();

        $category = Category::take(10)->get();

        return view('client.index', compact('products', 'category'));
    }


    public function login() {

        if (auth()->check()) {
            return redirect()->route('client.index');
        }

        return view('client.auth.login');
    }

    public function register() {

        return view('client.auth.register');
    }

    public function forgotPassword() {

        return view('client.auth.forgot-password');
    }


}
