<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexController extends Controller
{

    public function index(){
        $categories = Category::all();
        $imageTops = News::orderBy('id', 'desc')->limit(3)->get();
        $trendingPost = News::orderBy('id','desc')->where('trending', 1)->limit(4)->get();
        $politicsNews = News::where('category_id', 7)->orderBy('id', 'Desc')->limit(1)->get();
        $politicsCategory = News::where('category_id', 7)->orderBy('id', 'asc')->limit(2)->get();
        $economicsNews = News::where('category_id', 3)->orderBy('id', 'Desc')->limit(1)->get();
        $economicsCategory = News::where('category_id', 3)->orderBy('id', 'asc')->limit(2)->get();
        $fashionsNews = News::where('category_id', 6)->orderBy('id', 'Desc')->limit(2)->get();
        $fashionCategory = News::where('category_id', 6)->orderBy('id', 'asc')->limit(3)->get();
        // $dates = News::with('created_at');
        // dd($imageTops);
        return view('index',compact('categories','imageTops','trendingPost','politicsNews','politicsCategory','economicsNews','economicsCategory','fashionsNews','fashionCategory'));
    }
    public function show($category){
        // $news = News::orderBy('id','desc')->where('category_id', $category)->get();
        $news = News::orderBy('id','desc')->where('category_id', $category)->paginate(3);

        // $news->paginate(5);
        // $news = News::paginate(5);
        // dd($news);
        $categories = Category::all();

        return view('navigation', compact('news','categories'));

    }
}
