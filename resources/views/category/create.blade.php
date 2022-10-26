@extends('layout.main')

@section('content')
    <h1>
        Create new category!
    </h1>
    <div>
        <form action="{{ route('category.store') }}" method="POST">
            @method('put')
            @csrf
            <div>
                <label for="">Name</label>
                <div>
                    <input type="text" name="name" placeholder="Category Name">
                </div>
            </div>
            <div>
                <button>
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
