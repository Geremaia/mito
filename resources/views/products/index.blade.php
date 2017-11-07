@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Todos os produtos</h1>

                <a href="/admin/products/new" class="btn btn-primary btn-sm pull-right">Novo Produto</a>

                <!-- will be used to show any messages -->
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Valor</td>
                        <td>Actions</td>
                    </tr>
                        @foreach($products as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->valor }}</td>
                                <!-- we will also add show, edit, and delete buttons -->
                                <td>

                                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}">Mostrar produto</a>

                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}">Editar produto</a>

                                </td>
                            </tr>
                        @endforeach
                </table>    
            </div>
        </div>
    </div>
@endsection