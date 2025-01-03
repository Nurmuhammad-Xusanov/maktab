@extends('layouts.adminLayout')
@section('title')
    Create
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Maktasb A'azosi yangilas</h1>
        <a class="btn btn-success" href="{{ route('schoolmembers.index') }}">Orqaga</a>
    </div>
    <form action="{{ route('schoolmembers.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input value="{{ $item->class }}" type="number" class="form-control" id="class" placeholder="Sinf"
                name="class">
        </div>
        <div class="form-group">
            <input value="{{ $item->students }}" type="number" class="form-control" id="students"
                placeholder="O'quvchilar" name="students">
        </div>
        <div class="form-group">
            <input value="{{ $item->teachers }}" type="number" class="form-control" id="teachers"
                placeholder="O'qituvchilar" name="teachers">
        </div>
        <div class="form-group">
            <input value="{{ $item->graduates }}" type="number" class="form-control" id="graduates"
                placeholder="Bitiruvchilar" name="graduates">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Yangilas</button>
        </div>
    </form>
@endsection
