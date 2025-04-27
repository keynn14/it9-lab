@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label>Body:</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection
