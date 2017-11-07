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
                <form class="form-horizontal" method="POST" action="{{ route('deleteconfirm') }}">
                    {{ csrf_field() }}  
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">ID</label>

                        <div class="col-md-6">
                            <input type="text" id="product-id" name="product_id" value="<?php$request->route('id');?>" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/products" ><button a type="button" class="btn btn-warning" >
                               Cancelar
                            </button></a>
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