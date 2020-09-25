{{-- Extender o layout principal --}}
@extends('site.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cliente')

{{-- Section para a acao --}}
@section('acao', 'Cadastrar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}



    <h1>teste</h1>

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="cpf">
        <label for="cpf">Cpf</label>
        <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>

    <button class="btn btn-primary">Salvar</button>





@endsection
