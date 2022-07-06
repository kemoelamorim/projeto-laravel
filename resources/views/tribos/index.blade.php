<x-layout subtitle="Tribos" entidade="tribo">
<div class="d-flex justify-content-start">
    <a href="{{ url('/tribo/create') }}">
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
    @foreach ($tribos as $tribo)
    <tr>
      <th scope="row">{{ $tribo->id }}</th>
      <td>{{$tribo->nome}}</td>
      <td>{{$tribo->responsavel}}</td>
      <td>{{$tribo->descricao}}</td>
      <td class="d-flex flex-row ">
        <a href="{{ url('/tribo/edit/'. $tribo->id) }}">
            <button class="btn btn-primary">Edit</button>
        </a>
        <form action="{{ url('/tribo/delete/'. $tribo->id) }}" method="post">
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
