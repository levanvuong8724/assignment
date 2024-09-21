@extends('admin.layouts.index')
@section('title')
    @parent
    Thêm sản phẩm
@show
@push('styles')
    <style>

    </style>
@endpush


@section('content')

<div  class="p-4" style="min-height: 900px;">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
         <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Thêm mới sản phẩm</h4>
       </div>
    </div>
    <form action="{{ route('admin.products.addpost') }}" method="POST"
    enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <label for="" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="row">
            <label for="" class="form-label">Giá</label>
            <input type="text" class="form-control" name="price">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="row">
            <label for="" class="form-label">Hãng</label>
            <select name="category_id" id="" class="form-select">
                    @foreach($categories as $id => $name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="row">
            <label for="" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="quantity">
            @error('quantity')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="row">
            <label for="" class="form-label">Lượt xem</label>
            <input type="text" class="form-control" name="view">
            @error('view')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="row">
            <label for="" class="form-label">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="image">
            @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="row">
            <label for="" class="form-label">Trạng thái</label>
            <input type="checkbox" class="form-check-input" name="is_active">
            @error('is_active')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        </div>
    <hr>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
    </div>

@endsection
