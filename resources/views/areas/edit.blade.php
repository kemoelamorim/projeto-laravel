<x-layout subtitle="Edit Area" >
<form action="{{url('area/update/' . $area->id)}}" method="post">
    @csrf
    @method("PATCH")
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $area->nome }}" id="nome">
    </div>
    <div class="mb-3">
        <label for="responsavel" class="form-label">Responsável</label>
        <input type="text" class="form-control"  name="responsavel"  value="{{ $area->responsavel }}" id="responsavel">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao"  value="{{ $area->descricao }}" id="descricao">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
</x-layout>
