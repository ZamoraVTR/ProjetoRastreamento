@extends('site.layouts.basico')


@section('titulo', 'Home')

@section('conteudo')

<div class="conteudo-destaque">
    <div class="centro">
        <div class="informacoes">
            @if(session('alert'))
                <script>
                    alert("{{ session('alert') }}");
                </script>
            @endif
            <h1>Sistema de rastreamento de entregas</h1>
            <p>Digite seu CPF para buscar<p>
            @component('site.layouts._components.form_busca', ['classe' => 'borda'])
            @endcomponent
        </div>
    </div>
</div>
@endsection