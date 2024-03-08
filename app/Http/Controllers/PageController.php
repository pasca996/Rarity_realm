<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome() {
        
        $announcements = Announcement::orderBy('created_at', 'desc')->take(8)->get();
        return view('welcome' , compact('announcements'));
    }

    public function profile() {

        $user = Auth::user();
        return view('profiles.profile', compact('user'));
    }
}
