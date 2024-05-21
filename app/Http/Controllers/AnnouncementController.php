<?php
namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Post::all();
        return view('announcements.index', compact('announcements'));
    }
    public function search(Request $request)
    {
        // Arama terimini al
        $searchTerm = $request->input('search');

        // Arama terimine göre duyuruları filtrele
        $announcements = Announcement::where('title', 'like', "%$searchTerm%")
            ->orWhere('content', 'like', "%$searchTerm%")
            ->get();

        // Arama sonuçlarını view'e geçir
        return view('announcements.index', compact('announcements'));
    }
}

