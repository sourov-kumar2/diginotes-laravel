@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Add Note</div>
                    <div class="card-body">
                        <form action="{{route('notes.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Add Note</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
