<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    //

    private $rule = [
            'name'=>'required|max:30',
            'description'=>'required|max:255',
            'value'=>'required|numeric'
        ];

    public function index()
    {
        $products = Product::orderBy('name')->paginate(10);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rule);
        $product = Product::create($request->all());
        return redirect()->route('products.index')->with('success','Data created successfully!');
    }

    public function show()
    {

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, $this->rule);
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success','Data updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        return redirect()->route('products.index')->with('success','Data deleted successfully!');
    }
}
