<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $news = News::paginate(10);
        $latestNews = News::latest()->first();
        $threeLatestNews = News::latest()->take(3)->get();
        $tenFirstNews = News::inRandomOrder()->take(10)->get();
        return view('layout.news', compact('news', 'latestNews', 'threeLatestNews', 'tenFirstNews'));
    }

    public function index2()
    {   
        $news = News::paginate(10);
        return view('layout.allnews', compact('news'));
    }
    public function index3($news_slug)
    {   
        $news = News::where('news_slug', $news_slug)->firstOrFail();
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
                'title' => 'required| unique:news,title',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            $slug = Str::slug($request->title, '-');

            News::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'news_slug' => $slug,
                'description' => $request->description,
                'image' => $request->file('image')->store('images', 'public'),
            ]);
    
            return redirect()->route('news')
            ->with('modal_type', 'success')
            ->with('modal_title', 'Saved!')
            ->with('message', 'News has been successfully added!');
            
        } catch (\Throwable $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('modal_title', 'Error!')
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
    public function edit(string $slug)
    {
        $news = News::where('news_slug', $slug)->firstOrFail();
        return view('admin.editnews', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $news_slug)
    {
        $news = News::where('news_slug', $news_slug)->firstOrFail();

        try {
            $request->validate([
                'title' => "required|unique:news,title,{$news->id}",
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            $slug = Str::slug($request->title, '-');

            if($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $news-> image = $imagePath;
            }
        
            $news-> title = $request->input('title');
            $news-> news_slug = $slug;
            $news-> description = $request->input('description');
            $news-> save();
    
            return  redirect()->route('news')
            ->with('modal_type', 'success')
            ->with('modal_title', 'Saved!')
            ->with('message', 'News has been successfully updated!');
            
        } catch (\Throwable $e) {
            return  redirect()->route('news.edit', $slug)
            ->with('modal_type', 'error')
            ->with('modal_title', 'Error!')
            ->with('message', 'Failed to update news: '.$e->getMessage())
            ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $news_slug)
    {
        $news = News::where('news_slug', $news_slug)->firstOrFail();

        if (Storage::exists('public/'. $news->image)){
            Storage::delete('public/' . $news->image);
        }
        $news->delete();

        return back()
        ->with('modal_type', 'success')
        ->with('message', 'News has been successfully deleted!');
    }
}
