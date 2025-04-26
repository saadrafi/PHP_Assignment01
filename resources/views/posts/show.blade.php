@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4 rounded bg-light">
            <h1 class="text-primary">{{ $post->title }}</h1>
            <p class="text-muted">Created at: {{ $post->created_at->format('F j, Y, g:i a') }}</p>
            <hr>
            <p class="text-muted">{{ $post->description }}</p>
            
        </div>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary mt-3">&larr; Back to Posts</a>
    </div>
@endsection