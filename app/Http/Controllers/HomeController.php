<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Advert;
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
        $adverts_main   = Advert::where('hide', 2)->where('area', 4)->orderBy('sort', 'asc')->get();
        // $adverts_top    = Advert::where('hide', 2)->where('area', 1)->orderBy('sort', 'asc')->get();
        $adverts_center = Advert::where('hide', 2)->where('area', 2)->orderBy('sort', 'asc')->get();
        $adverts_bottom = Advert::where('hide', 2)->where('area', 3)->orderBy('sort', 'asc')->get();
        $new_lasted     = News::orderBy('new_id', 'desc')->limit(5)->get();
        $data = [
            'adverts_main'   => $adverts_main ,
            'adverts_center' => $adverts_center,
            'adverts_bottom' => $adverts_bottom,
            'new_lasted'     => $new_lasted,
        ];
        return view('client.page.trangchu',$data);
    }

    public function detail($id)
    {
        $new = News::where('new_id',$id)->first();
        $same_news = News::where('cat_id',$new->cat_id)->paginate(3);
        $new_views = News::Orderby('new_view','desc')->paginate(3);
        return view('client.page.detail',compact('new','same_news','new_views'));
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
