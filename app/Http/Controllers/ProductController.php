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
        print_r($_POST);
        echo "test add";
    }
}