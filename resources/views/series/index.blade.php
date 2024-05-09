<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">
               {{ $serie->nome }}
            </li>
        @endforeach  
    </ul>
</x-layout>

{{-- 

O Laravel possui uma proteção contra um ataque chamado Cross-Site Request Forgery (CSRF). Todo formulário que nós enviamos para o Laravel precisa ter uma informação extra: um token. Esse token permite que o Laravel verifique que a requisição realmente foi enviada por um formulário do site.

Felizmente essa informação é simples de se adicionar, bastando usar a diretiva @csrf do blade. :-D --}}
