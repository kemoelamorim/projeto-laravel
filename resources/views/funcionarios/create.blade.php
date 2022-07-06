<x-layout subtitle="New Funcionario" >
<form action="/funcionario/salvar" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome"  class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf">
    </div>
    <div class="mb-3">
        <label for="valorHora" class="form-label">Valor Hora</label>
        <input type="number" class="form-control" name="valorHora" id="valorHora">
    </div>
    <div class="mb-3">
        <label for="funcao" class="form-label">Função</label>
        <input type="text" class="form-control" name="funcao" id="funcao">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</x-layout>
