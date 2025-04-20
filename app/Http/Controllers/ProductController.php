<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Products::all();
        return view('layout.product', compact('products'));
    }

    public function index2()
    {
        return view('admin.addproducts');
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
    public function add_product(Request $request)
    {   
        try {
            $request->validate([
                'product_name' => 'required',
                'product_description' => 'required',
                'product_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            Products::create([
                'product_name' =>$request->product_name,
                'product_description' => $request->product_description,
                'product_image' => $request->file('product_image')->store('images', 'public'),
            ]);
    
            return back()
            ->with('modal_type', 'success')
            ->with('message', 'Product has been successfully added!');

        } catch (\Exception $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('message', 'Failed to add product: '.$e->getMessage())
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
        $product = Products::findOrFail($id);
        return view('admin.editproducts', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::findOrFail($id);

        try {
            $request->validate([
                'product_name' => 'required|string',
                'product_description' => 'required|string',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        
            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('images', 'public');
                $product->product_image = $imagePath;
            }
        
            $product-> product_name = $request->input('product_name');
            $product-> product_description = $request->input('product_description');
            $product->save();
        
            return back()
            ->with('modal_type', 'success')
            ->with('message', 'Product updated successfully.');

        } catch (\Exception $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('message', 'Failed to add product: '.$e->getMessage())
            ->withInput();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return back()
        ->with('modal_type', 'success')
        ->with('message', 'Product deleted successfully.');
    }
}
