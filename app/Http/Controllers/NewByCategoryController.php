<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewByCategoryController extends Controller
{
    /**
     * Bài viết theo danh mục
    */
    public function index($catParent, $slugChild)
    {

        return view('client.page.category');
    }
}
