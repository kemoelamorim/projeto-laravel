<x-layout subtitle="Dashboard">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <a style="text-decoration:none; color: #000000;" href="{{ url('areas') }}" >
        <div class="col">
            <div class="card">
                <img src="https://cdn.pixabay.com/photo/2017/07/06/14/48/organization-2478211_960_720.jpg" class="card-img-top" alt="Areas">
                <div class="card-body">
                    <h5 class="card-title">Areas</h5>
                    <p class="card-text">Areas da empresa, com sua descrição e seus respectivos lideres.</p>
                </div>
            </div>
        </div>
    </a>
    <a style="text-decoration:none; color: #000000;" href="{{ url('tribos') }}">
        <div class="col">
            <div class="card">
                <img src="https://mh-1-agencia-estoque.panthermedia.net/media/media_detail/0022000000/22683000/~quebra-cabe%C3%A7a-de-equipe-no-grupo_22683595_detail.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tribos</h5>
                    <p class="card-text">Tribos da empresa, com sua descrição e seus respectivos lideres.</p>
                </div>
            </div>
        </div>
    </a>
    <a style="text-decoration:none; color: #000000;" href="{{ url('squads') }}">

        <div class="col">
            <div class="card">
                <img src="https://cdn.pixabay.com/photo/2017/07/31/11/21/people-2557396_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Squads</h5>
                    <p class="card-text">Squads da empresa, com sua descrição e seus respectivos lideres.</p>
                </div>
            </div>
        </div>
    </a>
    <a style="text-decoration:none; color: #000000;" href="{{ url('funcionarios') }}">
        <div class="col">
            <div class="card">
                <img src="https://cdn.pixabay.com/photo/2019/12/17/17/09/woman-4702060_960_720.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Funcionarios</h5>
                    <p class="card-text">Funcionarios da empresa, com sua descrição e suas respectivos funções.</p>
                </div>
            </div>
        </div>
    </a>
    <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Funcionarios Orçados</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
</div>
</x-layout>
