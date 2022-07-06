<x-layout subtitle="Squads" entidade="squad">
<div class="d-flex justify-content-start">
    <a href="{{ url('/squad/create') }}">
        <button class="btn btn-success">New</button>
    </a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Responsável</th>
      <th scope="col">Descrição</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($squads as $squad)
    <tr>
      <th scope="row">{{ $squad->id }}</th>
      <td>{{$squad->nome}}</td>
      <td>{{$squad->responsavel}}</td>
      <td>{{$squad->descricao}}</td>
      <td class="d-flex flex-row ">
        <a href="{{ url('/squad/edit/'. $squad->id) }}">
            <button class="btn btn-primary">Edit</button>
        </a>
        <form action="{{ url('/squad/delete/'. $squad->id) }}" method="post">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger " onClick="return confirm('Confirma delete?')">Delete</button>
        </form>
        </a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
</x-layout>
