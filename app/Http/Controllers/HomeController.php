<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client.page.trangchu');
    }

    public function detail($id)
    {
        $new = News::where('new_id',$id)->first();
        $same_news = News::where('cat_id',$new->cat_id)->paginate(3);
        $new_k = News::Orderby('new_view','desc')->paginate(3);
        return view('client.page.detail',compact('new','same_news','new_k'));
    }
    public function category(Request $req)
    {
        return view('client.page.category');
    }
    public function postComment(Request $req){
        $comment = new Comment;
        $comment->user_id =1;
        $comment->comment_author_email = $req->comment_author_email;
        $comment->comment_content = $req->comments_content ;
        $comment->save();
        return redirect()->back();
    }
}
