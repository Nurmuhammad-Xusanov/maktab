@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Staff edit</h1>
    </div>
    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" class="form-control" value="{{ $staff->first_name }}" id="first_name" placeholder="First name"
                name="first_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="{{ $staff->last_name }}" id="last_name"
                placeholder="Last name" name="last_name">
        </div>
        <div class="form-group">
            <select class="form-control" name="profession_id" id="profession_id" required>
                <option value="">Kasbni tanlang</option>
                @foreach ($professions as $profession)
                    <option value="{{ $profession->id }}" {{ $staff->profession_id == $profession->id ? 'selected' : '' }}>
                        {{ $profession->name }}
                    </option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <select class="form-control" name="category_id" id="category_id" required>
                <option value="">Toifani tanlang</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $staff->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

        </div>
        <div class="form-group">
            <input type="number" value="{{$staff->experience}}" class="form-control" id="experience" placeholder="Ish staji" name="experience">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
