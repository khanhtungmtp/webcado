<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewByCategoryController extends Controller
{
    /**
     * Bài viết theo danh mục
    */
    public function index($catParent, $catChild)
    {
        if ($catChild) {
            $category = Category::where('cat_slug', $catChild)->first();
        }
        $news = News::where('cat_id', $category->cat_id)->get();
       // dd($news);
        return view('client.page.category', compact('category', 'news'));
    }

    public function index1($catParent)
    {
        $category = Category::where('cat_slug', $catParent)->first();
        $news = News::where('cat_id', $category->cat_id)->get();
       // dd($category);
        return view('client.page.category', compact('category', 'news'));
    }
}
