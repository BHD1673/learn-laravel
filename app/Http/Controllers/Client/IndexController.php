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




}
