@extends('admin.dashboard');
@section('title')
    Gallery
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Gallery</h1>
        <a class="btn btn-success" href="{{ route('gallery.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">Image</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($images as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset($item->image) }}" alt="img"
                            style="width: 50px; height: 50px; object-fit: cover;"></td>
                    </td>
                    <td>
                        <div class="d-flex">
                         <form method="POST" class="pr-2" action="{{ route('gallery.destroy', $item->id) }}">
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
