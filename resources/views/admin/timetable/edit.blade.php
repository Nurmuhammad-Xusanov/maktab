@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Timetable edit</h1>
    </div>
    <form action="{{ route('timetable.edit', $timetable->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input value="{{ $timetable->title }}" type="text" class="form-control" id="title" placeholder="title"
                name="title">
        </div>
        <div class="form-group">
            <h4>File name: {{ basename($timetable->file) }}</h4>
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </form>
@endsection
