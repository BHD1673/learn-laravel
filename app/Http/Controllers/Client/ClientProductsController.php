<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ClientProductsController extends Controller
{
    public function index() {
        $products = Products::all();
        $categories = Category::all();
        return view('client.products.listing', compact('products', 'categories'));
    }

    public function show($id) {
        $product = Products::find($id);
        return view('client.products.show', compact('product'));
        
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $category = $request->input('category');
        $limit = 10; // Set the limit to the desired number of records

        $products = Products::query();

        // Apply search filter if a query is present
        if ($query) {
            $products->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            });
        }

        // Apply category filter if a category is present
        if ($category) {
            $products->where('category_id', $category);
        }

        // Limit the results and get them
        $products = $products->take($limit)->get();

        // Fetch all categories for the search form
        $categories = Category::all();

        return view('products.search', compact('products', 'query', 'category', 'categories'));
    }

    public function addToCart($id) {
        //
    }
    
}
