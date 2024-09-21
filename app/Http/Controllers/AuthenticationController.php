<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserLoginRequest;

class AuthenticationController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(UserLoginRequest $req){
     
        $dataUserLogin =[
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($dataUserLogin)){
            // Logout hết các tài khoản
            Session::where('user_id', Auth::id())->delete();
            // Tạo phiên đăng nhập mới
            session()->put('user_id',Auth::id());

             // Đăng nhập  thành công
            if (Auth::user()->role == '1') {
                return redirect()->route('admin.products.list_product')->with([
                    'message' => 'Đăng nhập thành công'
               ]);
            }else{
                // Đăng nhập vào user
                return redirect()->route('user.products.list_products')->with([
                    'message' => 'Đăng nhập thành công'
               ]);
            }
          
        }else{
            // Đăng nhập thất bại
            return redirect()->back()->with([
                'message' => 'Email hoặc pass không đúng'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
            'message' => 'Đăng xuất thành công'
        ]);
    }

    public function dangky(){
        return view('dangky');
    }
    public function postDangky(Request $req){
        $check = User::where('email', $req->email)->exists();
        if($check){
            return redirect()->back()->with([
                'message' => 'Tài khoản đã tồn tại'
            ]);
        }else{
            $data =[
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ];
            $newUser = User::create($data);   
        return redirect()->route('login')->with([
            'message' => 'Đăng xuất thành công, Vui lòng đăng nhập'
        ]);
        }
    }
}
