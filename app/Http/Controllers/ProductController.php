<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function list()
    {
        $products = Product::all();
        return view("products_list", ['products' => $products]);
    }

    public function add(Request $request) {
        Product::create([
            'name' => $request->input('name')
        ]);
        return redirect('/products');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view("products_form", ['product' => $product]);
    }

    public function save($id, Request $request) {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->save();
        return redirect('/products');
    }

    public function delete($id) {
        Product::destroy($id);
        return redirect("/products");
    }
}