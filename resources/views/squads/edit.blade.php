<x-layout subtitle="Edit Squad" >
<form action="{{url('squad/update/' . $squad->id)}}" method="post">
    @csrf
    @method("PATCH")
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $squad->nome }}" id="nome">
    </div>
    <div class="mb-3">
        <label for="responsavel" class="form-label">Responsável</label>
        <input type="text" class="form-control"  name="responsavel"  value="{{ $squad->responsavel }}" id="responsavel">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao"  value="{{ $squad->descricao }}" id="descricao">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
</x-layout>
