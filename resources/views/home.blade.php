@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Bem Vindo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non libero vitae neque pharetra placerat vitae non lectus. Curabitur nec augue urna. Vivamus molestie imperdiet purus, sed sollicitudin augue fringilla in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam faucibus elit quis imperdiet ornare. Vivamus auctor ipsum eu volutpat vestibulum. Nullam sagittis sapien id nisl condimentum, in blandit quam finibus. Donec purus odio, blandit eu ex a, interdum sollicitudin nibh. Vivamus ultrices lacus id nisl tincidunt bibendum. Nulla facilisi. Nunc sapien risus, luctus non blandit elementum, faucibus vitae ligula. </p>
                    <a href="/products" ><br>Vizualizar os Produtos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection