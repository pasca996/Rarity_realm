<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome() {
        
        $announcements = Announcement::orderBy('created_at', 'desc')->where('is_accepted', true)->take(12)->get();
        return view('welcome' , compact('announcements'));
    }

    public function profile() {

        $user = Auth::user();
        return view('profiles.profile', compact('user'));
    }


    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(10);
        return view('announcement.index', compact('announcements'));

        // ->where('is_accepted',true) ,in attesa US03
}
}