<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function showCategory(Category $category)
    {
        return view('welcome', compact('category'));
    }
}