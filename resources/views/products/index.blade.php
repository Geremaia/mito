@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ URL::to('products') }}">Product Alert</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('products') }}">Vizualizar todos os produtos</a></li>
                        <li><a href="{{ URL::to('products/create') }}">Novo Produto</a>
                    </ul>
                </nav>

        <h1>Todos os produtos</h1>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nome }}</td>
                                <td>{{ $value->valor }}</td>
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>

                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Show this Nerd</a>

                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Edit this Nerd</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
@endsection