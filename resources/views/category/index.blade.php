@extends('layout.main')

@section('content')
    <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Other Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoryList as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}">Update</a>
                            <a href="{{ route('category.delete', $category->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('category.create') }}">Create new category</a>
        </div>
    </div>
@endsection
