@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Post edit</h1>
    </div>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <textarea name="description" required>{{ $post->description }}</textarea>
        </div>
        <div class="form-gorup">
            <p>Current image:</p>
            <img src="{{ asset($post->image) }}" alt="img" style="width: 100px; height: 100px; object-fit: cover;">
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <input type="date" name="date" value="{{ $post->date }}" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
@endsection
