<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement()
    {
        return view('announcement.create');
    }

    public function showAnnouncement($announcement)
    {
        $announcement = Announcement::findOrFail($announcement);

        $categories = Category::all();

        return view('announcement.show', compact ('announcement', 'categories'));
    }
}
