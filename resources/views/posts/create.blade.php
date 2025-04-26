@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h1>Create Post</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Write your post title here..." required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" placeholder="Write your post description here..." 
                        class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection