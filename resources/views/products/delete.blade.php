@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <h1>Excluir produto</h1>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('store') }}">
                    {{ csrf_field() }}  

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="button" class="btn btn-warning">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-danger pull-right">
                                Excluir
                            </button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection