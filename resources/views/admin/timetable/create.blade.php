@extends('layouts.adminLayout')
@section('title')
    Create
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Timetable create</h1>
    </div>
    <form action="{{ route('timetable.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="title" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
