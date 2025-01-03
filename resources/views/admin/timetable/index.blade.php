@extends('admin.dashboard');
@section('title')
    Timetable
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Timetable</h1>
        <a class="btn btn-success" href="{{ route('timetable.create') }}">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($timetables as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ basename($item->file) }}</td>
                    <td>
                        <div class="d-flex">
                            <div class="pr-2">
                                <a href= "{{ route('timetable.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="pr-2">
                                <a href= "{{ route('timetable.download', $item->id) }}" class="btn btn-primary">Download</a>
                            </div>
                            <form method="POST" class="pr-2" action="{{ route('timetable.destroy', $item->id) }}">
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
