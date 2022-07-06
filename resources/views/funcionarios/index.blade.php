<x-layout subtitle="Funcionarios">
<div class="d-flex justify-content-start">
    <a href="{{ url('/create/funcionario') }}">
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
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
</x-layout>
