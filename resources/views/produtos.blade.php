@extends('layouts.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if (count($prods)>0)

        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Stock</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prods as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->stock}}</td>
                    <td>{{$p->preco}}</td>                    
                    <td>
                        @foreach ($cats as $c)
                            {{($p->categoria_id == $c->id) ? $c->nome : ''}}
                        @endforeach
                    </td>
                    <td>
                        <a href="/produtos/editar/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produtos/apagar/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @endif
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>
@endsection