@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Profession edit</h1>
    </div>
    <form action="{{ route('professions.update', $profession->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" class="form-control" value="{{ $profession->name }}" id="name" placeholder="name"
                name="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
@endsection
