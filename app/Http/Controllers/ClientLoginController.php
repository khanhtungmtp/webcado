<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Hash;
class ClientLoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $req){
        $this->validate($req,
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',

            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',

            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();
        return redirect('/')->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $req){
       $this->validate($req,
           [
               'email'=>'required|email',
               'password'=>'required|min:6|max:20'
           ],
           [
               'email.required'=>'Vui lòng nhập email',
               'email.email'=>'Email không đúng định dạng',
               'password.required'=>'Vui lòng nhập mật khẩu',
               'password.min'=>'Mật khẩu ít nhất 6 kí tự',
               'password.max'=>'Mật khẩu không quá 20 kí tự'
           ]
       );
       $credentials = array('email'=>$req->email,'password'=>$req->password);



           if(Auth::attempt($credentials)){

           return redirect('/')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
           }
           else{
               return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
           }


   }
   public function postLogout(){
		        Auth::logout();
		        return redirect('/');
	}


}
