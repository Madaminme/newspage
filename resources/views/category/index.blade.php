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
                            <a href="{{ route('category.delete', $category->id) }}"
                                onclick="event.preventDefault();document.getElementById(
                                 'delete-form-{{ $category->id }}').submit();">delete</a>
                        </td>
                        <form id="delete-form-{{ $category->id }}" + action="{{ route('category.delete', $category->id) }}"
                            method="post">
                            @csrf @method('DELETE')
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('category.create') }}">Create new category</a>
        </div>
    </div>
@endsection
