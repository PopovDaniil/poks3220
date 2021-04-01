<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller {
    public function list()
    {
        $categories = Category::all();
        return view("categories_list", ['categories' => $categories]);
    }

    public function add(Request $request) {
        Category::create([
            'name' => $request->input('name')
        ]);
        return redirect('/categories');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view("categories_form", ['category' => $category]);
    }

    public function save($id, Request $request) {
        $product = Category::find($id);
        $product->name = $request->input('name');
        $product->save();
        return redirect('/categories');
    }

    public function delete($id) {
        Category::destroy($id);
        return redirect("/categories");
    }
}