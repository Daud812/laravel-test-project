<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $products = Product::orderby('created_at')->get();
        return view('product.index', ['products' => $products]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){

        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->quntity = $request->quntity;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index')->with('success'.'Product added suuccessfuly');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('product.edit', ['product'=>$product]);
    }

    public function update(Request $request, Product $product){
        // dd($request);

        $product = Product::find($request->hidden_id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->quntity = $request->quntity;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index')->with('success'.'Product added suuccessfuly');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success'.'Product added suuccessfuly');
    }
}
