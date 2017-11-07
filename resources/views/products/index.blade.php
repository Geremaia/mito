@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <h1>Todos os produtos</h1>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <table class="table">
                    <tr>
                        <td>ID</td> 
                        <td>Nome</td>
                        <td>Valor</td>
                        <td>Ações</td>
                    </tr>
                    @foreach($products as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->valor }}</td>
                            <td>
                                <a class="btn btn-small btn-success" href="/admin/products/show?id=<?=$value->id?>">Mostrar</a>
                                <a class="btn btn-small btn-warning" href="/admin/products/edit?id=<?=$value->id?>">Editar</a>
                                <a class="btn btn-small btn-danger" href="/admin/products/delete?id=<?=$value->id?>">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <a href="/admin/products/create" class="btn btn-primary btn-sm">Novo Produto</a>    
            </div>
        </div>
    </div>
@endsection