<x-layout subtitle="Edit Funcionario" >
<form action="{{url('funcionario/update/' . $funcionario->id)}}" method="post">
    @csrf
    @method("PATCH")
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $funcionario->nome }}" id="nome">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" value="{{ $funcionario->cpf }}">
    </div>
    <div class="mb-3">
        <label for="valorHora" class="form-label">Valor Hora</label>
        <input type="text" class="form-control" name="valorHora" value="{{ $funcionario->valorHora }}" id="valorHora">
    </div>
    <div class="mb-3">
        <label for="funcao" class="form-label">Função</label>
        <input type="text" class="form-control" name="funcao"  value="{{ $funcionario->funcao }}" id="funcao">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
</x-layout>
