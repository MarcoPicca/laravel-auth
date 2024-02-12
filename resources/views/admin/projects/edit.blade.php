@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('partials.errors')

            <form action="{{ route('admin.posts.update', $project)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Titolo:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $project->title)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="image_url" class="input-group-text">Immagine:</label>
                    <input class="form-control" type="text" name="image_url" id="image_url" value="{{ old('image_url', $project->image_url)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Data:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date', $project->date)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Descrizione:</label>
                    <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $project->description)}}">
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Update post
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