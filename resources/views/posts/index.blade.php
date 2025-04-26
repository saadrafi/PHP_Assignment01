@extends('layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Posts</h1>

        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger text-center" role="alert">
                {{ session('error') }}
            </div>
        @endif
        

        @if ($posts->isEmpty())
            <div class="alert alert-warning text-center" role="alert">
                No posts available.
            </div>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                            
                                <h5 class="card-title text-primary">{{ strtoupper($post->title) }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($post->description, 50) }}....<a href="{{ route('posts.show', $post) }}" class="btn btn-link btn-sm">See More</a></p>
                                <p class="text-muted mt-auto small">Created at: {{ $post->created_at->format('F j, Y, g:i a') }}</p>
                                <div class="mt-3 d-flex gap-2">
                                    
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                                    
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection