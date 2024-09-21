@extends('admin.layouts.index')
@section('title')
    @parent
    Danh sách sảnh phẩm
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
        <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>

        <a href="{{ route('admin.products.add_product') }}"><button class="btn btn-info">Thêm mới</button></a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hãng</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            <div style="width: 100px; height: 100px;">
                                <img src="{{ asset($item->image) }}" style="max-width: 100%; max-height: 100%"
                                    alt="">
                            </div>
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->view }}</td>
                        <td>
                            {!! $item->is_active ? '<span class="btn btn-warning">Đang xử lí</span>': '<span class="badge bg-danger">Đã mua</span>' !!}
                        </td>
                        <td>
                            <a href="{{route('admin.products.detail', $item->id)}}"><button class="btn btn-success">Xem chi tiết</button></a>

                            <a href="{{route('admin.products.edit', $item->id)}}"><button class="btn btn-info">Sửa</button> </a>

                            <form action="{{ route('admin.products.delete', $item->id) }}"
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
