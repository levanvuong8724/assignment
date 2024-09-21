<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Carbon;
class ProductController extends Controller
{

    public function index()
    {
        $data = Product::query()->get();
        $data = Product::query()->with(['category'])->latest('id')->get();
        return view('admin.products.list_product', compact('data'));
    }
    public function add()
    {
        $categories = Category::query()->pluck('name','id')->all();
        return view('admin.products.add_product' , compact('categories'));
    }
    public function addpost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'view' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048', // 2MB max file size
            'is_active' => 'nullable|boolean',
        ], [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'name.string' => 'Tên sản phẩm phải là chuỗi ký tự.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'category_id.required' => 'Danh mục sản phẩm là bắt buộc.',
            'category_id.integer' => 'Danh mục sản phẩm phải là số nguyên.',
            'category_id.exists' => 'Danh mục sản phẩm không tồn tại.',
            'quantity.required' => 'Số lượng sản phẩm là bắt buộc.',
            'quantity.integer' => 'Số lượng sản phẩm phải là số nguyên.',
            'quantity.min' => 'Số lượng sản phẩm phải lớn hơn hoặc bằng 0.',
            'view.required' => 'Lượt xem sản phẩm là bắt buộc.',
            'view.integer' => 'Lượt xem sản phẩm phải là số nguyên.',
            'view.min' => 'Lượt xem sản phẩm phải lớn hơn hoặc bằng 0.',
            'image.image' => 'Ảnh sản phẩm phải là file hình ảnh.',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB.',
            'is_active.boolean' => 'Trạng thái sản phẩm phải là giá trị true/false.',
        ]);
    
        $linkImage = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);
            $linkImage = $linkStorage . $newName;
        }
    
        $data = [
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category_id'],
            'quantity' => $validatedData['quantity'],
            'view' => $validatedData['view'],
            'image' => $linkImage,
            'is_active' => $validatedData['is_active'] ?? 0,
        ];
    
        Product::query()->create($data);
    
        return redirect()->route('admin.products.list_product')->with([
            'message' => 'Thêm mới thành công',
        ]);
    }
    public function delete(Request $req){
        $product = Product::where('id',$req->id)->first();
        if($product->first()->image!= null && $product->first()->image != ''){
            File::delete(public_path($product->image));
        }
       Product::where('id',$req->id)->delete();
        return redirect()->route('admin.products.list_product')->with([
            'message' => 'Xóa thành công'
        ]);
    }
    public function detailProduct($id){
        $product = Product::where('id',$id)->first();
        return view('admin.products.detail_product')->with([
            'product' => $product
        ]);
    }

   public function edit($id)
{
   $product = Product::where('id',$id)->first();
   $categories = Category::all();
    return view('admin.products.edit_product')->with([
        'product' => $product,
        'categories' => $categories
    ]);
}
    public function editPacth($id, Request $req){
        $validatedData = $req->validate([
            'name' => 'required|string|max:255|min:3',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'quantity' => 'required|integer|min:0',
            'view' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048', // 2MB max file size
            'is_active' => 'nullable|boolean',
        ], [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'name.string' => 'Tên sản phẩm phải là chuỗi ký tự.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'name.min' => 'Tên sản phẩm phải có ít nhất 3 ký tự.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'price.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'category_id.required' => 'Danh mục sản phẩm là bắt buộc.',
            'category_id.integer' => 'Danh mục sản phẩm phải là số nguyên.',
            'category_id.exists' => 'Danh mục sản phẩm không tồn tại.',
            'quantity.required' => 'Số lượng sản phẩm là bắt buộc.',
            'quantity.integer' => 'Số lượng sản phẩm phải là số nguyên.',
            'quantity.min' => 'Số lượng sản phẩm phải lớn hơn hoặc bằng 0.',
            'view.required' => 'Lượt xem sản phẩm là bắt buộc.',
            'view.integer' => 'Lượt xem sản phẩm phải là số nguyên.',
            'view.min' => 'Lượt xem sản phẩm phải lớn hơn hoặc bằng 0.',
            'image.image' => 'Ảnh sản phẩm phải là file hình ảnh.',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB.',
            'is_active.boolean' => 'Trạng thái sản phẩm phải là giá trị true/false.',
        ]);
        $product = Product::where('id',$id)->first();
        $linkImage = $product->image;
        if($req->hasFile('image')){
            File::delete(public_path($product->image));// xóa file
            $image = $req->file('image');
            $newName = time().'.'. $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);

            $linkImage = $linkStorage . $newName;
        }


        $data =[
            'name' => $req->name,
            'price' => $req->price,
            'category_id' => $req->category_id,
            'quantity' => $req->quantity,
            'view' => $req->view,
            'image' => $linkImage,
            'is_active' => $req->has('is_active') ? 1 : 0
        ];
        Product::where('id',$id)->update($data);
        return redirect()->route('admin.products.list_product')->with([
            'message' => 'Sửa thành công'
        ]);
    
    }


}
