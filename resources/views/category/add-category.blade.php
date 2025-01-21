@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Add Category</div>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        </div>
                            <button type="submit" class="btn btn-success mt-3">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
