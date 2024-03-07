<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome() {
        // $announcements = Announcement::take(6)->get()->orderBy('created_at' , 'desc');
        $announcements = DB::table('announcements')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('welcome' , compact('announcements'));
    }
}
