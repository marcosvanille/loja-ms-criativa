<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 255);
            $table->string('sobrenome', 255);
            $table->string('cep' ,80);
            $table->string('estado' ,100);
            $table->string('cidade' ,100);
            $table->string('produto' ,100);
            $table->string('qtd_compra' ,20);
            $table->string('valor_unitario',50);
            $table->string('data_pedido',50);
            $table->string('situacao_pedido',50);
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
        Schema::dropIfExists('clientes');
    }
}
