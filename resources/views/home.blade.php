@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="x_content">
                    <table class="table">
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                      </tr>
                      <?php foreach($products as $product): ?>
                        <tr>
                          <td><?= $product->getId() ?></td>
                          <td><?= $product->getNome() ?></td>
                          <td>R$ <?= $product->getValor() ?></td>
                          <td><?= $product->getCategoria() ?></td>
                          <td>
                            <a href="/admin/products/show?id=<?=$product->getId()?>" class="btn btn-xs btn-primary">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="/admin/products/edit?id=<?=$product->getId()?>" class="btn btn-xs btn-warning">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/admin/products/delete?id=<?=$product->getId()?>" class="btn btn-xs btn-danger">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection