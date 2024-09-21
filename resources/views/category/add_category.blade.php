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
            <h4 class="fs-18 fw-semibold m-0">Thêm mới danh mục</h4>
       </div>
    </div>
    <form action="{{ route('category.addpost') }}" method="POST"
    enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <label for="" class="form-label">Tên Danh Mục</label>
            <input type="text" class="form-control" name="name">
        </div>
        <hr>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
    </div>

@endsection
