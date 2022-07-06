<x-layout subtitle="Areas" >
<div class="align-self-center">
    <a href="{{ url('/area/create') }}">
        <button class="btn btn-success justify-content-end">New</button>
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
    @foreach ($areas as $area)
    <tr>
      <th scope="row">{{ $area->id }}</th>
      <td>{{$area->nome}}</td>
      <td>{{$area->responsavel}}</td>
      <td>{{$area->descricao}}</td>
      <td class="d-flex flex-row ">
        <a href="{{ url('/area/edit/'. $area->id) }}">
            <button class="btn btn-primary">Edit</button>
        </a>
        <form action="{{ url('/area/delete/'. $area->id) }}" method="post">
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
