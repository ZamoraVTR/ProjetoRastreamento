<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Rastreamento;
use App\Encomenda;
use App\Transportadora;
class RastreamentoController extends Controller
{
    public function buscaDados(Request $request){

        $count = DB::table('encomendas')->count();
       
        if($count == null){
            //    Inicia busca na api para registro dos dados da transportadora
           $response = Http::get('https://run.mocky.io/v3/e8032a9d-7c4b-4044-9d00-57733a2e2637');
           $jsonData = $response->json();
           if(isset($jsonData)){
               foreach($jsonData['data'] as $dados_tpdr){
                   $dados_transportadora = new Transportadora();
                   $dados_transportadora->id = $dados_tpdr['_id'];
                   $dados_transportadora->cnpj = $dados_tpdr['_cnpj'];
                   $dados_transportadora->nome_fantasia = $dados_tpdr['_fantasia'];
                   $dados_transportadora->save();
                }
            }
            //    Inicia busca na api para registro dos dados da encomenda
           $response = Http::get('https://run.mocky.io/v3/6334edd3-ad56-427b-8f71-a3a395c5a0c7');
           $jsonData2 = $response->json();
           if(isset($jsonData2)) {
               foreach($jsonData2['data'] as $dados_encmd){
                   $dados_encomenda = new Encomenda();
                   $dados_encomenda->id = $dados_encmd['_id'];
                   $dados_encomenda->id_transportadora = $dados_encmd['_id_transportadora'];
                   $dados_encomenda->volume = $dados_encmd['_volumes'];
                   $dados_encomenda->remetente_nome = $dados_encmd['_remetente']['_nome'];
                   $dados_encomenda->destinatario_nome = $dados_encmd['_destinatario']['_nome'];
                   $dados_encomenda->destinatario_cpf = $dados_encmd['_destinatario']['_cpf'];
                   $dados_encomenda->destinatario_endereco = $dados_encmd['_destinatario']['_endereco'];
                   $dados_encomenda->destinatario_estado = $dados_encmd['_destinatario']['_estado'];
                   $dados_encomenda->destinatario_cep = $dados_encmd['_destinatario']['_cep'];
                   $dados_encomenda->destinatario_pais = $dados_encmd['_destinatario']['_pais'];
                   $dados_encomenda->geolocalizacao_lat = $dados_encmd['_destinatario']['_geolocalizao']['_lat'];
                   $dados_encomenda->geolocalizacao_lng = $dados_encmd['_destinatario']['_geolocalizao']['_lng'];
                   $dados_encomenda->save();
                }
            }
            //    Inicia busca na api para registro dos dados de rastreamento
           $jsonData2 = $response->json();
           if(isset($jsonData2)) {
               foreach($jsonData2['data'] as $dados_rstmt){
                   if (isset($dados_rstmt)) {
                       foreach($dados_rstmt['_rastreamento'] as $dados_rastreamento){
                           $rastreamento_status = new Rastreamento();
                           $rastreamento_status->id_encomenda = $dados_rstmt['_id'];
                           $rastreamento_status->mensagem = $dados_rastreamento['message'];
                           $rastreamento_status->data = $dados_rastreamento['date'];
                           $rastreamento_status->save();
                       }
                   }
               }
            }
        }
        $dados_busca = DB::table('encomendas')
        ->join('transportadoras', 'encomendas.id_transportadora', '=', 'transportadoras.id')
        ->join('rastreamentos', 'encomendas.id', '=', 'rastreamentos.id_encomenda')
        ->where('encomendas.destinatario_cpf', $request->cpf)
        ->first();

        if($dados_busca){
        $dados_encomenda = DB::table('rastreamentos')
        ->where('id_encomenda', '=', $dados_busca->id_encomenda)
      
        ->get();
        }

        if($dados_busca == ''){
            Session::flash('alert', 'CPF não encontrado');
            return redirect()->route('site.index');
        }else{
            return view('site.transportadora',['dados' => $dados_busca], ['dados_encomenda' => $dados_encomenda]);
        }
    }
}