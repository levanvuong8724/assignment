
@extends('admin.layouts.index')
@section('title')
    @parent
    Danh sách User
@show
@push('styles')
    <style>

    </style>
@endpush

@section('content')

    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <h4 class="text-primary mb-4">Danh sách user</h4>

        <a href="{{route('dashboard.add_user')}}"><button class="btn btn-info">Thêm mới</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phân quyền</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <a href="{{route('dashboard.edit_user', $item->id)}}"><button class="btn btn-info">Sửa</button> </a>
                            <form action="/user/{{$item->id}}"
                                 method="POST" style="display:inline;" onclick="return confirm('Ban co muon xoa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> 
                        </td> 
                    </tr>
             @endforeach
            </tbody>
        </table>
    </div>

@endsection

@push('scripts')
    <script></script>
@endpush
