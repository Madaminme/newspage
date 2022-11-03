@extends('layout.main')

@section('content')
    <h1>
        Create new tag!
    </h1>
    <div>
        <form action="{{ route('tag.store') }}" method="POST">
            @method('put')
            @csrf
            <div>
                <label for="">Name</label>
                <div>
                    <input type="text" name="name" placeholder="Tag Name">
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
