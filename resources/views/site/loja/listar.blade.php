{{-- Extender o layout principal --}}
@extends('site.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Cliente')

{{-- Section para a acao --}}
@section('acao', 'Listar')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}


<table class="table table-hover">



        <div class="form-group  ">
          <input type="password" class="form-control" id="" placeholder="Cpf">
        </div>
        <button type="submit" class="btn btn-primary">buscar</button>


    <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Cpf</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Total Comprado</th>
              </tr>

            </thead>
            <tbody>
                @foreach ($lista as $listar)
                    <tr>
                        <td>{{$listar['cpf']}}</td>
                        <td>{{$listar['nome']}}</td>
                        <td>{{$listar['email']}}</td>
                        <td>{{$listar['total']}}</td> 

                    </tr>
                @endforeach 
                <tr>
                  <td>Renda Total:</td>
                  <td></td>
                  <td></td>
                  <td>R$ {{$total}}</td>
              </tr>               
            </tbody>
        </table>
    </div>

</table>


@endsection
