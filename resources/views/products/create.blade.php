@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="POST" action="{{ route('store') }}">
                    {{ csrf_field() }}

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

                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Categoria <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="categoria" class="form-control col-md-7 col-xs-12">
                            @foreach($categories as $key => $value)
                                <option value="<?= $value->idcategories ?>"><?= $value->name ?></option>
                            @endforeach
                        </select>    
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="button" class="btn btn-warning">
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary pull-right">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection