<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Post::all();
        $data = Post::with('user')->paginate(5);

        foreach ($data as $item) {
            $item->user->posts_count = $item->user->posts()->count();   // Menghitung jumlah total post yang dibuat
        }

        return view('dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // PARAGI NYIMPEN DATA DI CREATE
    {
        $request->validate([
            'title' => 'required|min:3|max:25',
            'content' => 'required|min:10'
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'content.required' => 'Konten Wajib Diisi',
            'title.min' => 'Judul harus diisi dengan minimal 3 karakter!',
            'content.min' => 'Konten harus diisi dengan minimal 10 karakter!',
            'title.max' => 'Judul harus diisi dengan maksimal 25 karakter!',
        ]);

        $data =[
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ];

        Post::create($data);
        return redirect()->route('dashboard')->with('success', 'Postingan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post')); // Mengarah ke view 'edit' langsung di dalam views
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Post berhasil diperbarui');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Postingan berhasil dihapus');
    }
}
