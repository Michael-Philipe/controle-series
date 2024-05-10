<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-itens-center">
               {{ $serie->nome }}
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                     X
                    </button>
                </form>
            </li>
        @endforeach  
    </ul>
</x-layout>

{{-- 

O Laravel possui uma proteção contra um ataque chamado Cross-Site Request Forgery (CSRF). Todo formulário que nós enviamos para o Laravel precisa ter uma informação extra: um token. Esse token permite que o Laravel verifique que a requisição realmente foi enviada por um formulário do site.

Felizmente essa informação é simples de se adicionar, bastando usar a diretiva @csrf do blade. :-D --}}
