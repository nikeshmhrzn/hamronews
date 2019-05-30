<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::orderBy('id', 'desc')->get();
        // $categories::all();

       return view('news.index', compact('news'));
    }

    public function create(){
        $categories = Category::where('status',1)->get();

        return view('news.create', compact('categories'));
    }

    public function store(Request $request){
        $input = $request->all();

        if($request->hasFile('image')){
            $destination_path='public/images/news';
            $image = $request->file('image');
            $image_name= time(). '_' . $image->getClientOriginalName();
            $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;
        }

        $input['trending'] = isset($input['trending']) ? 1 : 0;
            // $input['trending']= 1;

        News::create($input);

        return redirect(url('News'));
    }

    public function show($detail){
        $news = News::where('id', $detail)->get();
        $categories = Category::all();

        return view('detail', compact('news','categories'));

    }


}
