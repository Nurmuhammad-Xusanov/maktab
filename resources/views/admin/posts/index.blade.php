@extends('admin.dashboard');
@section('title')
    Posts
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Post</h1>
        <a class="btn btn-success" href="{{ route('posts.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td><img src="{{ asset($item->image) }}" alt="img"
                            style="width: 50px; height: 50px; object-fit: cover;"></td>
                    </td>
                    <td>{{ $item->date }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href= "{{ route('posts.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            </div>

                            <form method="POST" class="pr-2" action="{{ route('posts.destroy', $item->id) }}">
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
