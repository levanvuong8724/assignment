<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getListProduct()
    {
        $product = Product::join('categories', 'categories.id', '=', 'product.category_id')
            ->select(
                'product.id',
                'product.name',
                'product.image',
                'product.price',
                'product.view',
                'categories.name as categories_name'
            )
            ->get();

        return response()->json([
            'data' => $product,
            'message' => 'success',
            'status_code' => 200
        ], 200);
    }

    public function getProduct($idProduct)
    {
        $product = Product::join('categories', 'categories.id', '=', 'product.category_id')
            ->select(
                'product.id',
                'product.name',
                'product.image',
                'product.price',
                'product.view',
                'categories.name as category_name'
            )
            ->find($idProduct);
            

        return response()->json([
            'data' => $product,
            'message' => 'success',
            'status_code' => 200
        ], 200);
    }
   
    public function addProduct(Request $req){
        // validate
        $data =[
            'name' => $req->name,
            'price' => $req->price,
            'image' => $req->image,
            'category_id' => $req->category_id,
        ];
        $newProduct = Product::create($data);
        return response()->json([
            'data' => $newProduct,
            'message' => 'success',
            'status_code' => '200'
        ],200);
    }

}
