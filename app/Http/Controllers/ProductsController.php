<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.index')->with('products', $products);

    }
    
   /** public function adminUsers()
    {
        $products = Product::all();

        return view('admin')->with('products', $products);
    }
    
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = Product::create([
            
            
            'price'=> $request->input('price'),
            'location'=> $request->input('location'),
            'description'=> $request->input('description'),
            'user_id'=> Auth::user()->id,
            'username'=> Auth::user()->name,
        ]);

        if($product){
            return redirect()->route('products.index', ['product'=> $product->id])
            ->with('success', 'Product Posted Successfully');
        
    }
    return back()->withInput()->with('errors','Error Posting Product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $product = Product::find($product->id);
        
        return view('products.edit', ['product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
         {
        //save data
        $productUpdates = Product::where ('id', $product->id)->update([
            'price'=> $request->input('price'),
            'location'=> $request->input('location'),
            'description'=> $request->input('description'),
            'user_id'=> Auth::user()->id,
            'username'=> Auth::user()->name
        ]);

            if($productUpdates){
                return redirect()->route('products.index', ['product'=>$product->id])
                ->with('success', 'Product Updated Successfully');
            }
        //redirect

        return back()->withInput();
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $findproduct = Product::find($product->id);
        If($findproduct->delete()){
            //redirect
            return redirect()->route('products.index')
            ->with('success', 'product removed successfully');
        }
        
        return back()->withInput()->with('error', 'product was not removed');
    }


}
