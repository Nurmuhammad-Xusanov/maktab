@extends('layouts.adminLayout')
@section('title')
    Create
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Staff create</h1>
    </div>
    <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="first_name" placeholder="First name" name="first_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
        </div>
        <div class="form-group">
            <select class="form-control" name="profession_id" id="profession_id" required>
                <option value="">Kasbni tanlang</option>
                @foreach ($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="category_id" id="category_id" required>
                <option value="">Toifani tanlang</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="experience" placeholder="Ish staji" name="experience">
        </div>
        <div class="form-group">
            <label for="image">Rasm yuklash:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
