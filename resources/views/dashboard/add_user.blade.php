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
            <h4 class="fs-18 fw-semibold m-0">Thêm mới User</h4>
       </div>
    </div>
    <form action="{{ route('dashboard.addpost') }}" method="POST"
    enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <label for="" class="form-label"> Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="row">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="row">
            <label for="" class="form-label">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="role" class="form-label">Phân quyền</label>
                    <select name="role" id="role" class="form-select">
                        <option value="1">Quản trị viên</option>
                        <option value="2">Người dùng thường</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
    </div>

@endsection
