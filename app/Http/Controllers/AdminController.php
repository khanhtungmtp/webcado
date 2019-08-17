<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    /**
     * share toàn bộ danh mục cho toàn bộ controller
     *
     */
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories', $categories);
    }

    public function index()
    {
        return view('admin.index');
    }

    //
    public function adminGetLogin()
    {
        return view('admin.adminLogin');
    }

    public function adminPostLogin(AdminLoginRequest $request)
    {
        $username = $request->admin_username;
        $password = Hash::check('admin_password', $request->admin_password);
        $admin    = DB::table('admins')
            ->where('admin_username', $username)
            ->where('admin_password', $password)
            ->where('admin_blocked', 0)
            ->first();
//             dd($admin);
        if ($admin != null)
        {
            Session::put('admin_username', $admin->admin_fullname);
            Session::put('admin_not_blocked', 0);
            Session::flash('message', 'Đăng nhập thành công vào hệ thống');
            return redirect()->route('admin.index');
        } else
        {
            Session::flash('error', 'Sai tài khoản hoặc mật khẩu');
            return redirect()->back();
        }
    }

    public function logoutAdmin()
    {
        Session::flush();
        return redirect()->route('admin.get.login')->with('message', 'Đăng xuất hệ thống thành công');
    }
}
