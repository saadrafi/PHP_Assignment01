@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h1>Edit Post</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description"  class="form-control" rows="5" required>{{ $post->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection