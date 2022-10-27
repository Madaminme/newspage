@extends('layout.main')

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="text" placeholder="Category name" name="name" value="{{ $category->name }}">
        <br>
        <button type="submit">Submit</button>
    </form>
@endsection
