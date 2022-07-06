<x-layout subtitle="Funcionarios">
<div class="d-flex justify-content-start">
    <a href="{{ url('/funcionario/create') }}">
        <button class="btn btn-success">New</button>
    </a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Valor Hora</th>
      <th scope="col">Função</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($funcionarios as $funcionario)
    <tr>
      <th scope="row">{{ $funcionario->id }}</th>
      <td>{{$funcionario->nome}}</td>
      <td>{{$funcionario->cpf}}</td>
      <td>{{$funcionario->valorHora}}</td>
      <td>{{$funcionario->funcao}}</td>
      <td class="d-flex flex-row ">
        <a href="{{ url('/funcionario/edit/'. $funcionario->id) }}">
            <button class="btn btn-primary">Edit</button>
        </a>
        <form action="{{ url('/funcionario/delete/'. $funcionario->id) }}" method="post">
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
