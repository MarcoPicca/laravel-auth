@extends('layouts.admin')

@section('title', 'Admin Project')

@section('main-content')
<div class="container">
    <div class="row text-center pt-4">
        <div class="col-12">
            
            <h2 scope="row">
                {{ $project->id }}
            </h2>
        </div>
        <div class="col-12 text-center">
            <h2>
                {{ $project->title }}
            </h2>

            <img src="{{ $project->image_url }}" alt="">

            <p>
                {{ $project->date }}
            </p>
            <div class="p-5">
                <p>
                    <em>
                        {{ $project->content}}
                    </em>
                </p>
            </div>
            <td>
                <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none">
                    <button class="btn btn-sm btn-success">
                        Modifica
                    </button>
                </a>
                <button class="btn btn-sm btn-danger">
                    Delete
                </button>
            </td>
        </div>
        @auth
        <a href="{{ route('admin.projects.index') }}" class="text-decoration-none mt-3">
            <button class="btn btn-primary">
                Progetti
            </button>
        </a>
        @endauth
    </div>
</div>
@endsection