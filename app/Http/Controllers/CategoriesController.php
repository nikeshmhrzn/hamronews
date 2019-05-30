<?php

namespace App\Http\Controllers;

use App\Category;
use App\Editor;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create(){

        return view('categories.create');
    }

    public function store(Request $request){
        $input = $request->all();
        Category::create($input);

        return redirect(url('Categories'));
    }


    public function edit($categories){
        $categories = Category::find($categories);
        return view('categories.edit', compact('categories'));
    }


    public function update(Request $request, $categories){
        $categories = Category::find($categories);
        // yesma "class_id" student db ko column ho and "name" and "address" pani student db ko column ho
        $categories->name = $request->get('name');
        $categories->status = $request->get('status');

        $categories->save();

        return redirect(url('Categories'));
    }


    public function destroy($categories){

        $categories = Category::find($categories);
        $categories->delete();
        return redirect(url('Categories'));
    }
    public function show($category){
        $editors = Editor::where('category_id', $category)->get();
        $categories = Category::all();

        return view('index', compact('editors','categories'));

    }

}
