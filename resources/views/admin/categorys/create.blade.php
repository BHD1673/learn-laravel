@extends('layouts.master')

@section('title')
    Thêm danh mục bài viết mới
@endsection

@section('main-content')
    <h2>Thêm danh mục mới</h2>

    <div class="container">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" name="slug" value="">
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="number" class="form-control" id="user_id" name="user_id" value="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('scripts')

@endsection