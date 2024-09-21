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
    <form action="{{ route('dashboard.editpost', $users->id) }}" method="POST"
    enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <label for="" class="form-label"> Name </label>
            <input type="text" class="form-control" name="name"  value="{{ $users->name }}">
        </div>
        <div class="row">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $users->email }}">
        </div>
        <div class="row">
            <label for="" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $users->password }}">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Vai trò người dùng</label>
            <select name="role" id="role" class="form-select">
                <option value="1" {{ $users->role == 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $users->role == 2 ? 'selected' : '' }}>Người dùng</option>
            </select>
        </div>
        <hr>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
    </div>

@endsection
