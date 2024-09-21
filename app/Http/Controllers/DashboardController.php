<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Dashboard::query()->get();
        return view('dashboard.list_user', compact('users'));
    }
    public function add()
    {
        $users = Dashboard::query()->pluck('id')->all();
        return view('dashboard.add_user', compact('users'));
    }
    public function addPost(Request $req)
    {
        $validated = $req->validate([
            'name'  => 'required',
            'email' => 'required',
            'password'  => 'required',
            'role'   => 'required',
        ], [
            'name.required'  => 'Tên bắt buộc phải nhập',
            'email.required'  => 'Email bắt buộc phải nhập',
            'password.required'  => 'Mật khẩu bắt buộc phải nhập',
            'role.required'  => 'Vai trò bắt buộc phải nhập',
        ]);

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
        ];

        Dashboard::create($data);

        return redirect()->route('dashboard.list_user')->with([
            'message' => 'Thêm mới thành công'
        ]);
    }



    public function edit($id)
    {
        $users = Dashboard::where('id', $id)->first();
        return view('dashboard.edit_user')->with([
            'users' => $users,
        ]);
    }

    public function editPost($id, Request $req)
    {
        $validated = $req->validate([
            'name'  => 'required',
            'email' => 'required',
            'password'  => 'required',
            'role'   => 'required',
        ], [
            'name.required'  => 'Tên bắt buộc phải nhập',
            'email.required'  => 'Email bắt buộc phải nhập',
            'password.required'  => 'Mật khẩu bắt buộc phải nhập',
            'role.required'  => 'Vai trò bắt buộc phải nhập',
        ]);

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
        ];
        Dashboard::where('id', $id)->update($data);
        return redirect()->route('dashboard.list_user')->with([
            'message' => 'Sửa thành công'
        ]);
    }

    
    public function delete(Request $req)
    {
        Dashboard::where('id', $req->id)->delete();
        return redirect()->route('dashboard.list_user')->with([
            'message' => 'Xóa thành công'
        ]);
    }
}
