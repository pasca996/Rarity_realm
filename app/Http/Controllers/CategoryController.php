<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(Category $category)
    {
        $announcements = $category->announcements->where('is_accepted',true);

        return view('categories.show',compact('category', 'announcements'));
    }

}