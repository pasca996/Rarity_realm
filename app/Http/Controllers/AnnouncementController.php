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

        $announcementCategories = Announcement::where('category_id', $announcement->category_id)
        ->where('id', '!=', $announcement->id)
        ->where('is_accepted', true)
        ->take(6)
        ->get();
        $categories = Category::all();

        return view('announcement.show', compact ('announcement', 'categories', 'announcementCategories'));
    }

    public function indexAnnouncement() {
        $category = Category::all();
        $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted', true)->get();
        return view('announcement.index', compact('announcements', 'category'));
    }
}
