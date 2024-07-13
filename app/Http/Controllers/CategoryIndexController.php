<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $query = $category->adverts();
        $adverts = $query->paginate(12);

        return view('categories.show', ['category' => $category, 'adverts' => $adverts]);
    }
}
