@extends('layout.main')

@section('content')
    <form action="{{ route('tag.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="text" placeholder="Tag name" name="name" value="{{ $tag->name }}">
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
