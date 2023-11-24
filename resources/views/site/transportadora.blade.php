@extends('site.layouts.basico') 
@section('titulo', 'Dados Encomenda')

@section('conteudo') 

<form  method="post">

<div class="conteudo-destaque">
    <div class="centro">
        <div class="informacoes">
            <div class="box-body table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Remetente</th>
                            <th>Qtd. Volumes</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                            
                            <td>{{$dados->remetente_nome}}</td>
                            <td>{{$dados->volume}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <tbody>
                    <thead>
                        <tr>
                            <th>Nome destinatário</th>
                            <th>Endereço</th>
                            <th>Estado</th>
                            <th>Cep</th>
                            <th>Pais</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                                                    
                            <td>{{$dados->destinatario_nome}}</td>
                            <td>{{$dados->destinatario_endereco}}</td>
                            <td>{{$dados->destinatario_estado}}</td>
                            <td>{{$dados->destinatario_cep}}</td>
                            <td>{{$dados->destinatario_pais}}</td>
                        </tr>
                    <tbody>
                    <thead>
                        <tr>
                            <th>Transportadora</th>
                            <th>CNPJ</th>
                            <th>Status da Entrega</th>
                            <th>Data / Hora</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados_encomenda as  $status)
                        <tr>  
                            <td>{{$dados->nome_fantasia}}</td>
                            <td>{{$dados->cnpj}}</td>
                            <td>{{$status->mensagem}}</td>
                            <td>{{date($status->data)}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
        </div>  
    </div>     
</div>
@endsection 