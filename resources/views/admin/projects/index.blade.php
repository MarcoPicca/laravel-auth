@extends('layouts.admin')

@section('main-content')
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table p-2 m-3">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">titolo</th>
                                <th scope="col">immagine</th>
                                <th scope="col">data</th>
                                <th scope="col">descrizione</th>
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
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection