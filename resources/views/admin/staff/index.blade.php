@extends('admin.dashboard');
@section('title')
    Staff
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Staff</h1>
        <a class="btn btn-success" href="{{ route('staff.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Profession</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staff as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->profession->name }}</td>
                    <td><img src="{{ asset($item->image) }}" alt="logo"
                            style="width: 50px; height: 50px; object-fit: cover;"></td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href="{{ route('staff.show', $item->id) }}" class="btn btn-info">Show</a>
                            </div>
                            <div class="pr-2">
                                <a href= "{{ route('staff.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            </div>

                            <form method="POST" class="pr-2" action="{{ route('staff.destroy', $item->id) }}">
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
