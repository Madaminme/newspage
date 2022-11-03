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
                @foreach ($tagList as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <a href="{{ route('tag.edit', $tag->id) }}">Update</a>
                            <a href="{{ route('tag.delete', $tag->id) }}"
                                onclick="event.preventDefault();document.getElementById(
                                 'delete-form-{{ $tag->id }}').submit();">delete</a>
                        </td>
                        <form id="delete-form-{{ $tag->id }}" + action="{{ route('tag.delete', $tag->id) }}"
                            method="post">
                            @csrf @method('DELETE')
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('tag.create') }}">Create new tag</a>
        </div>
    </div>
@endsection
