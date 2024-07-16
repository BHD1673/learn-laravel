<?php 
// app/Http/ViewComposers/MenuComposer.php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class MenuComposer
{
    public function compose(View $view)
    {
        $category = Category::all(); // Fetch categories from the database
        $view->with('category', $category);
    }
}
