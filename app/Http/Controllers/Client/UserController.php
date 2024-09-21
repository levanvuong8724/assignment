<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        $categories = Category::query()->pluck('name','id')->all();
        // dd($categories);
        // Tạo query cho sản phẩm
        $query = Product::query();

        // Lọc theo danh mục nếu có
        if ($request->has('category_id') && $request->category_id != '') {
            $query->where('category_id', $request->category_id);
        }

        // Lấy danh sách sản phẩm
        $products = $query->paginate(3);

        return view('user.products.list_products', compact('products', 'categories'));
    }

    // public function index(Request $request)
    // {
    //     // Lấy danh sách các danh mục
    //     $categories = Category::query()->pluck('name','id')->all();
    //     // dd($categories);
    //     // Tạo query cho sản phẩm
    //     $query = Product::query();

    //     // Lọc theo danh mục nếu có
    //     if ($request->has('category_id') && $request->category_id != '') {
    //         $query->where('category_id', $request->category_id);
    //     }

    //     // Lấy danh sách sản phẩm
    //     $products = $query->paginate(6);
    //     dd($products);

    //     // Truyền dữ liệu đến view
    //     return view('user.products.list_products', compact('products', 'categories'));
    // }
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search products by name or description
        $products = Product::where('name', 'LIKE', "%{$query}%")
                           ->paginate(6);
                           $categories = Category::query()->pluck('name','id')->all();
         return view('user.products.list_products', compact('products', 'categories'));
    }
}
