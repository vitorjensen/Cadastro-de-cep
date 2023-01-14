@extends('layouts.layout')


@section('title')
Consulta
@endsection



@section('grid')
<div class="container mt-5">
<div class="row">
<div class="col-sm-10">
<h5 class="card-title">Cep Cadastrado:</h5>
</div>
<br>
<div class="col-sm-2">
  <a href="{{route ('clientes-create')}}" class="btn btn-primary">Novo Cep:</a>
</div>
</div>
<table class="table table-striped" id="example01">
<br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cep:</th>
      <th scope="col">Rua:</th>
      <th scope="col">Cidade:</th>
      <th scope="col">Ações:</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cliente as $cliente)
    <tr>
      <th>{{$cliente->id}}</th>
      <th>{{$cliente->cep}}</th>
      <th>{{$cliente->rua}}</th>
      <th>{{$cliente->cidade}}</th>
      <th class="d-flex">
        <form action="{{ route('clientes-index', ['id'=>$cliente->id]) }}" method="POST"></form>
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-light"  onclick="excluir_registro(event)">
     <i class="fa fa-trash"></i>
      </button>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
