@extends('admin.layouts.index')
@section('title')
    @parent
   Chi tiết sản phẩm
@show
@push('styles')
    <style>
        .img-product{
            width: 100px;
        }

    </style>
@endpush
@section('content')

<div class="p-4" style="min-height: 800px;">
  
        
            <p scope="col">Tên sản phẩm</p>
            <span class="font-weight-bold">{{$product->name}}</span>
            <p scope="col">Hình ảnh</p>
            <img src="{{ asset($product->image) }}" alt="" class="img-product"></img>
            <p scope="col">Giá</p>
            <span class="font-weight-bold">{{$product->price}}</span>
            <p scope="col">Hãng</p>
            <span class="font-weight-bold">{{$product->category->name}}</span>
            <p scope="col">Số lượng</p>
            <span class="font-weight-bold">{{$product->quantity}}</span>
            <p scope="col">Lượt xem</p>
            <span class="font-weight-bold">{{$product->view}}</span><br>
<hr>
            <a href="{{route('admin.products.list_product')}}"><button class="btn btn-danger">Trở về</button></a>
       
     
</div>

@endsection
@push('scripts')
    <script></script>
@endpush
