<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('category.list_category', compact('categories'));
    }
   public function add(){
    $categories = Category::query()->pluck('name','id')->all();
    return view('category.add_category' , compact('categories'));
   }
   public function addpost(Request $req){
    $data =[
        'name' => $req->name,
    ];
    Category::query()->create($data);
    return redirect()->route('category.list_category')->with([
        'message' => 'Thêm mới thành công'
    ]);
   }

   public function delete(Request $req){
    Category::where('id',$req->id)->delete();
    return redirect()->route('category.list_category')->with([
        'message' => 'Xóa thành công'
    ]);
   }

   public function edit($id){
    $categories = Category::query()->findOrFail($id);
     return view('category.edit_category')->with([
         'categories' => $categories
     ]);
   }

   public function editPut($id, Request $req)
   {
       $categories = Category::where('id',$id)->first();
       $categories=[
        'name' => $req->name,
       ];
       Category::where('id',$id)->update($categories);
       return redirect()->route('category.list_category')
           ->with('message', 'Sửa thành công');
   }
}
