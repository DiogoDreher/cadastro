@extends('layouts.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    <label for="nomeCategoria">Stock do Produto</label>
                    <input type="number" class="form-control" name="stockProduto" id="stockProduto" placeholder="Stock">
                    <label for="nomeCategoria">Preço do Produto</label>
                    <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="precoProduto" id="precoProduto" placeholder="Preço">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="categoriaProduto" name="categoriaProduto">
                        <option selected>-----</option>
                        @foreach ($cats as $c)
                            <option value="{{$c->id}}">{{$c->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection