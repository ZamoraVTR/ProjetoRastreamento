<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncomendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomendas', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('id_transportadora', 100);
            $table->integer('volume')->nullable($value = true);
            $table->string('remetente_nome', 255);
            $table->string('destinatario_nome', 255);
            $table->string('destinatario_cpf', 255);
            $table->string('destinatario_endereco', 255);
            $table->string('destinatario_estado', 255);
            $table->string('destinatario_cep', 255);
            $table->string('destinatario_pais', 255);
            $table->string('geolocalizacao_lat', 255);
            $table->string('geolocalizacao_lng', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encomendas');
    }
}
