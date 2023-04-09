@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('category.create') }}" class="btn btn-success">Thêm danh mục</a>
                    <hr>

                    <table class="table  m-2" id="list_category">
                        <thead class="table-warning mt-2">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Title</th>
                                <th scope="col">Desc</th>
                                <th scope="col">Status</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $cate)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $cate->title }}</td>
                                    <td>{{ $cate->description }}</td>
                                    <td>
                                        @if ($cate->status == 0)
                                            <a href="" class="btn btn-secondary">Không</a>
                                        @else
                                            <a href="" class="btn btn-dark"> hiển thị</a>
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{ route('category.edit', $cate->id) }}" class="btn btn-primary">Sửa</a>

                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['category.destroy', $cate->id],
                                            'onsubmit' => 'return confirm("bạn có muốn xoa không ?")',
                                        ]) !!}
                                        {!! Form::submit('Xoá', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#list_category');
    </script>
@endsection
