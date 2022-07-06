<x-layout subtitle="New Area" >
<form action="/area/salvar" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="mb-3">
        <label for="responsavel" class="form-label">Responsável</label>
        <input type="text" class="form-control"  name="responsavel" id="responsavel">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</x-layout>

