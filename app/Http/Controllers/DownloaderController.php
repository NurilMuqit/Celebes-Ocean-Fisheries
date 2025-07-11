<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Downloader;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $downloaderPaginate = Downloader::when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return view('admin.downloader', compact('downloaderPaginate'));
    }

    public function companyProfile(): StreamedResponse
    {
        $path = storage_path('app/private/COF-Company-Profile.pdf');

        return response()->streamDownload(function () use ($path) {
            echo file_get_contents($path);
        }, 'COF-Company-Profile.pdf');
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
    public function store(Request $request)
    {
        //
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
        $Downloader = Downloader::findOrFail($id);
        $Downloader->delete();

        return back()
            ->with('modal_type', 'success')
            ->with('modal_title', 'Deleted!')
            ->with('message', 'Data has been successfully deleted!');
    }
}
