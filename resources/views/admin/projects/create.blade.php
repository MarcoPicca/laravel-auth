@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('partials.errors')

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Title:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="image_url" class="input-group-text">Image:</label>
                    <input class="form-control" type="text" name="image_url" id="image_url" value="{{ old('image_url') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date') }}">
                </div>

                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Description:</label>
                    <input class="form-control" type="text" name="description" id="description" value="{{ old('description') }}">
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Create new post
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection