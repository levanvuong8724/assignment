<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == '1') { // Kiểm tra nếu người dùng có vai trò là admin
                return $next($request); // Cho phép truy cập
            } else {
                return redirect()->route('home')->with([
                    'message' => 'Bạn không có quyền truy cập trang này.'
                ]); // Chuyển hướng về trang chủ với thông báo lỗi
            }
        } else {
            return redirect()->route('login')->with([
                'message' => 'Bạn phải đăng nhập trước.'
            ]); // Chuyển hướng về trang đăng nhập với thông báo lỗi
        }
    }
}
