@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Category edit</h1>
    </div>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" class="form-control" value="{{ $category->name }}" id="name" placeholder="name"
                name="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
@endsection
