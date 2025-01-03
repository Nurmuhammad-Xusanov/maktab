@extends('layouts.adminLayout')
@section('title')
    Create
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Post create</h1>
    </div>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="description" placeholder="description" name="description">
        </div>
        <div class="form-group">
            <input type="file" name="image" required>
        </div>
        <div class="form-group">
            <input type="date" name="date" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
