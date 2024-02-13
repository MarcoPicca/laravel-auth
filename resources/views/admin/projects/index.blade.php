@extends('layouts.admin')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <table class="table p-2 m-3">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">titolo</th>
                                <th scope="col">immagine</th>
                                <th scope="col">data</th>
                                <th scope="col">descrizione</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project['id'] }} </td>
                                <td>{{ $project['title'] }} </td>
                                <td>{{ $project['image_url'] }} </td>
                                <td>{{ $project['date'] }} </td>
                                <td>{{ $project['description'] }} </td>
                                
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none">
                                        <button class="btn btn-sm btn-primary">
                                            Visualizza
                                        </button>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none">
                                        <button class="btn btn-sm btn-success">
                                            Modifica
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-center">
                    <a href="{{ route('admin.projects.create', $project) }}" class="text-decoration-none">
                        <button class="btn btn-primary">
                            Aggiungi un nuovo progetto
                        </button>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection