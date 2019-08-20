<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Advert;
use App\Models\Comment;
use App\Models\Category;
use App\Models\ReplyComment;
use Session;

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

        $adverts_center = Advert::where('hide', 2)->where('area', 2)->orderBy('sort', 'asc')->get();
        $adverts_bottom = Advert::where('hide', 2)->where('area', 4)->orderBy('sort', 'asc')->get();
        $new_lasted     = News::orderBy('new_id', 'desc')->limit(5)->get();
        $new_views      = News::Orderby('new_view', 'desc')->paginate(3);
        $new_hot       = News::Orderby('new_total_rating', 'desc')->paginate(5);

        // XOSO
        $cates      = Category::where('cat_parent_id', 4)->get();
        $cate_xoso      = Category::where('cat_id', 4)->get();
        $menus           = array($cate_xoso[0]['cat_name']);
        $post  = News::where('cat_id', 4)->get();
        $posts = array($post[0]);
        foreach ($cates as $key => $cat)
        {
            array_push($menus, $cat['cat_name']);
            $post      = News::where('cat_id', $cat['cat_id'])->orderBy('new_id','desc')->limit(5)->get();
            foreach($post as $child_post) {
              array_push($posts, $child_post);
            }
        }
        // dd($posts);
        // SOIKEO-NHANDINH
        $cates_soikeo      = Category::where('cat_parent_id', 6)->get();
        $cate_soikeo      = Category::where('cat_id', 6)->get();
        $menus_soikeo           = array($cate_soikeo[0]['cat_name']);
        $post_soikeo  = News::where('cat_id', 6)->get();
        $posts_soikeo = array($post_soikeo[0]);
        foreach ($cates_soikeo as $key => $cat_soikeo)
        {
            array_push($menus_soikeo, $cat_soikeo['cat_name']);
            $post      = News::where('cat_id', $cat_soikeo['cat_id'])->orderBy('new_id','desc')->limit(5)->get();
            foreach($post as $child_post) {
              array_push($posts_soikeo, $child_post);
            }
        }
        // dd($posts_soikeo);

        // casino
        $cates_casino      = Category::where('cat_parent_id', 1)->get();
        $cate_casino      = Category::where('cat_id', 1)->get();
        $menus_casino           = array($cate_casino[0]['cat_name']);
        $post_casino  = News::where('cat_id', 1)->get();
        $posts_casino = array($post_casino[0]);
        foreach ($cates_casino as $key => $cat_casino)
        {
            array_push($menus_casino, $cat_casino['cat_name']);
            $post_casino      = News::where('cat_id', $cat_casino['cat_id'])->orderBy('new_id','desc')->limit(8)->get();
            foreach($post_casino as $child_post) {
              array_push($posts_casino, $child_post);
            }
        }

        // dd($posts);
        $data = [
            'adverts_center' => $adverts_center,
            'adverts_bottom' => $adverts_bottom,
            'new_lasted'     => $new_lasted,
            'menus'          => $menus,
            'menus_soikeo'   => $menus_soikeo,
            'menus_casino'   => $menus_casino,
            'new_views'      => $new_views,
            'new_hot'        => $new_hot,
            'posts'          =>$posts,
            'posts_soikeo'   =>$posts_soikeo,
            'posts_casino'   =>$posts_casino,

        ];

        return view('client.page.trangchu', $data);
    }

    public function detail(Request $req, $id)
    {
        $new            = News::where('new_id', $id)->first();
        $same_news      = News::where('cat_id', $new->cat_id)->paginate(3);
        $new_hot       = News::Orderby('new_total_rating', 'desc')->paginate(5);
        $adverts_center = Advert::where('hide', 2)->where('area', 2)->orderBy('sort', 'asc')->get();
        $comment        = Comment::where('new_id', $new->new_id)->get();
        $new_views      = News::Orderby('new_view', 'desc')->paginate(3);
        $reply_comment  = ReplyComment::where('com_id', 1)->get();
        if ($req->isMethod('post'))
        {
            $com = Comment::insert([
                'comment_author_email' => $req->comment_author_email,
                'comment_content'      => $req->comment_content,
                'new_id'               => $id
            ]);

            if ($com)
            {
                echo 'thanh cong';
                //$q = Session::put('commented', $req->comment_author_email);

                //return redirect()->back();
            }

        }
        return view('client.page.detail', compact('new', 'same_news', 'adverts_center','new_views' ,'comment', 'reply_comment', 'new_hot', 'id'));
    }

    public function category(Request $req)
    {
        return view('client.page.category');
    }
    // public function postComment(Request $req ,$id){
    //     dd($req->segmen(2));
    //
    //     $comment = new Comment;
    //
    //     $comment->comment_author_email = $req->comment_author_email;
    //     $comment->comment_content = $req->comment_content ;
    //     $comment ->new_id = $id;
    //     $comment->save();
    //     return redirect()->back();
    // }

}
