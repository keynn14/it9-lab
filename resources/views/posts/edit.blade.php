@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div>
            <label>Body:</label>
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
