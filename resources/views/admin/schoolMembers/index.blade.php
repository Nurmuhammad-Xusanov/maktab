@extends('admin.dashboard');
@section('title')
    Maktab a'zolari
@endsection
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1>Maktasb A'zolari</h1>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sinflar soni</th>
                <th scope="col">O'quvchilar soni</th>
                <th scope="col">O'qituvchilar soni</th>
                <th scope="col">Bitiruvchilar soni</th>
                <th scope="col">Hodisa</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                @foreach ($items as $item)
                    <td>{{ $item->class }}</td>
                    <td>{{ $item->students }}</td>
                    <td>{{ $item->teachers }}</td>
                    <td>{{ $item->graduates }}</td>
                    <td><a class="btn btn-success" href="{{ route('schoolmembers.edit', $item->id) }}">Yangilash</a></td>
                @endforeach


            </tr>

        </tbody>
    </table>
@endsection
