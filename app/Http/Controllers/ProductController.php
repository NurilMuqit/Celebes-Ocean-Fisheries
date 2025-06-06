<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Products::all();
        $productsPaginate = Products::paginate(10);
        return view('layout.product', compact('products', 'productsPaginate'));
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
                'product_name' => 'required|unique:products,product_name',
                'product_description' => 'required',
                'product_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            $slug = Str::slug($request->product_name, '-');

            Products::create([
                'product_name' =>$request->product_name,
                'product_description' => $request->product_description,
                'product_slug' => $slug,
                'product_image' => $request->file('product_image')->store('images', 'public'),
            ]);
    
            return redirect()->route('product')
            ->with('modal_type', 'success')
            ->with('modal_title', 'Added!')
            ->with('message', 'Product has been successfully added!');

        } catch (\Exception $e) {
            return back()
            ->with('modal_type', 'error')
            ->with('modal_title', 'Error!')
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
    public function edit(string $slug)
    {
        $product = Products::where('product_slug', $slug)->firstOrFail();
        return view('admin.editproducts', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product_slug)
    {
        $product = Products::where('product_slug', $product_slug)->firstOrFail();

        try {
            $request->validate([
                'product_name' => "required|string|unique:products,product_name, $product->id",
                'product_description' => 'required|string',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            
            $product_slug = Str::slug($request->product_name, '-');
            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('images', 'public');
                $product->product_image = $imagePath;
            }
            
            $product-> product_name = $request->input('product_name');
            $product-> product_slug = $product_slug;
            $product-> product_description = $request->input('product_description');
            $product->save();
        
            return redirect()->route('product')
            ->with('modal_type', 'success')
            ->with('modal_title', 'Saved!')
            ->with('message', 'Product updated successfully.');

        } catch (\Exception $e) {
            return redirect()->route('product.edit', $product_slug)
            ->with('modal_type', 'error')
            ->with('modal_title', 'Error!')
            ->with('message', 'Failed to add product: '.$e->getMessage())
            ->withInput();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product_slug)
    {   
        $product = Products::where('product_slug', $product_slug)->firstOrFail();

        if (Storage::exists('public/'. $product->product_image)){
            Storage::delete('public/' . $product->product_image);
        }
        $product->delete();

        return back()
        ->with('modal_type', 'success')
        ->with('modal_title', 'Deleted!')
        ->with('message', 'Product has been successfully deleted.');
    }
}
