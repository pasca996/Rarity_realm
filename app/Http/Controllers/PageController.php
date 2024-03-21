<?php

namespace App\Http\Controllers;

use App\Mail\sendContactMail;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return view('announcement.search', compact('announcements'));
        
    }
    
    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function contact() {
        return view('contact');
}

public function send(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]);

    
        $data = [
            'name'=> $request->name ,
            'email'=> $request->email ,
             'message'=> $request->message,
        ];

        Mail::to($request->email)->send(new sendContactMail($data));
        return redirect()->route('welcome');
        

    }

}