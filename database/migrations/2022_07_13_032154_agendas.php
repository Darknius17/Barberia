<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_servicio');
            $table->string('nombreCliente');
            $table->string('email');
            $table->string('rut');  
            $table->integer('telefono');  
            $table->date('dia');  
            $table->string('hora');  
            $table->string('comentario');  
   
            
            
            
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
        //
    }
};
