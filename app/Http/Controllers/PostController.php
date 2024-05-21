<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    public function create()
{
    return view('admin.posts.create');
}

public function show(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post = new Post();
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post created successfully');
}
public function search(Request $request)
{
    $query = $request->input('query');

    $posts = Post::where('title', 'like', "%$query%")
                  ->orWhere('content', 'like', "%$query%")
                  ->get();

    return view('admin.posts.index', compact('posts'));
}



    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
}


public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully');
}





    // Diğer CRUD işlemleri için gerekli fonksiyonları ekleyin: show, edit, update, destroy
}
