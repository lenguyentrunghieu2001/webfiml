@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
                    <div class="form-group mb-2">
                        {!! Form::label('title', 'Title', ['class' => 'mb-2']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nhập vào dữ liệu ....']) !!}
                    </div>

                    <div class="form-group mb-2">
                        {!! Form::label('description', 'Description', ['class' => 'mb-2']) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Nhập vào dữ liệu ....']) !!}
                    </div>

                    <div class="form-group mb-2">
                        {!! Form::label('status', 'status', ['class' => 'mb-2']) !!}
                        {!! Form::select('status', ['1' => 'Hiển thị', '0' => 'Không hiển thị'], null, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Lưu dữ liệu', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('category.index') }}" class="btn btn-dark">Quay lại</a>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
