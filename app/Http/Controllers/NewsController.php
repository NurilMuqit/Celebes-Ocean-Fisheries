<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $news = News::all();
        $latestNews = News::latest()->first();
        $threeLatestNews = News::latest()->take(3)->get();
        $tenFirstNews = News::inRandomOrder()->take(10)->get();
        return view('layout.news', compact('news', 'latestNews', 'threeLatestNews', 'tenFirstNews'));
    }

    public function index2()
    {   
        $news = News::all();
        return view('layout.allnews', compact('news'));
    }
    public function index3(string $id)
    {   
        $news = News::findOrFail($id);
        return view('layout.newssection', compact('news'));
    }

    public function index4()
    {
        return view('admin.addnews');
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
    public function add_news(Request $request)
    {   
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            News::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
                'image' => $request->file('image')->store('images', 'public'),
            ]);
    
            return back()
            ->with('modal_type', 'success')
            ->with('message', 'News has been successfully added!');
            
        } catch (\Throwable $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('message', 'Failed to add news: '.$e->getMessage())
            ->withInput();
        }
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
        $news = News::findOrFail($id);
        return view('admin.editnews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);

        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            $news->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $request->file('image')->store('images', 'public'),
            ]);
    
            return back()
            ->with('modal_type', 'success')
            ->with('message', 'News has been successfully updated!');
            
        } catch (\Throwable $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('message', 'Failed to update news: '.$e->getMessage())
            ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        
        return back()
        ->with('modal_type', 'success')
        ->with('message', 'News has been successfully deleted!');
    }
}
