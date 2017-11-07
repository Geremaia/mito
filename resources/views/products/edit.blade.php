@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <h1>Atualizar produto</h1>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('editconfirm') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">ID</label>

                        <div class="col-md-6">
                            <input type="text" id="product-id" name="product_id" required="required" class="form-control col-md-7 col-xs-12" readonly>
                            <script> 
                                var url = document.URL;
                                var id = url.substr(-1);;
                                document.getElementById("product-id").value = id; 
                            </script>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nome</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                        <label for="valor" class="col-md-4 control-label">Valor</label>

                        <div class="col-md-6">
                            <input id="valor" type="text" class="form-control" name="valor" required>

                            @if ($errors->has('valor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/products" ><button a type="button" class="btn btn-warning" >
                                Cancelar
                            </button></a>
                            <button type="submit" class="btn btn-primary pull-right">
                                Atualizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection