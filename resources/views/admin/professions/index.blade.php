@extends('admin.dashboard');
@section('title')
    Profession
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Profession</h1>
        <a class="btn btn-success" href="{{ route('professions.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professions as $profession)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $profession->name }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href= "{{ route('professions.edit', $profession->id) }}" class="btn btn-primary">Edit</a>
                            </div>

                            <form method="POST" class="pr-2" action="{{ route('professions.destroy', $profession->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
