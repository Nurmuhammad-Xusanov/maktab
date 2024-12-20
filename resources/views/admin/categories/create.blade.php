@extends('layouts.adminLayout')
@section('title')
    Create
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Category create</h1>
    </div>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
