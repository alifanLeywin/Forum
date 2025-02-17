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
            'content' => 'required|min:10|max:255'
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
