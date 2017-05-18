<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('contatos', function(Blueprint $table){
      $table->increments('id'); // cria um id autoincremento
      $table->string('nome', 80); //cria um varchar 255
      $table->string('telefone'); //cria um var char 255
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
    Schema::dropIfExists('contatos');
  }
}
