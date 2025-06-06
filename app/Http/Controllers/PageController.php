<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Models\Products;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Products::inRandomOrder()->take(3)->get();
        return view('layout.homepage', compact('products'));
    }
    public function index2()
    {   
        $form = Form::paginate(10);
        return view('admin.usercontact', compact('form'));
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
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone'   => ['required', 'regex:/^62[0-9]{7,14}$/'],
                'subject' => 'required',
                'message' => 'required',
            ]);
    
            Form::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
    
            return back()
            ->with('modal_type', 'success')
            ->with('modal_title', 'Thank you!')
            ->with('message', 'Thank you for sending your warm message 
                    Can’t wait to work with you soon  ');

        } catch (\Throwable $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('modal_title', 'Error!')
            ->with('message', 'Failed to add form: '.$e->getMessage())
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
        $form = Form::findOrFail($id);
        return view('admin.userdetails', compact('form'));
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
        $form = Form::findOrFail($id);
        $form->delete();

        return back()
        ->with('modal_type', 'success')
        ->with('modal_title', 'Deleted!')
        ->with('message', 'Data has been successfully deleted.');
    }
}
