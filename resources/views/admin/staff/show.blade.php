@extends('layouts.adminLayout')
@section('title')
    Edit
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Staff edit</h1>
        <a class="btn btn-success" href="{{route('staff.index')}}">Orqaga</a>
    </div>
    <h4>Id: {{ $staff->id }}</h4>
    <h4>Ism: {{ $staff->first_name }}</h4>
    <h4>Familya: {{ $staff->last_name }}</h4>
    <h4>Tajriba: {{ $staff->experience }} yil</h4>
    <h4>Ish: {{ $staff->profession->name }}</h4>
    <h4>Toifa: {{ $staff->category->name }}</h4>
@endsection
