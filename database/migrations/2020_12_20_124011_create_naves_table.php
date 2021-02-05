<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('naves', function (Blueprint $table) {
            $table->id();
            $table->string('num_nave')->nullable();
            $table->string('seccion')->nullable();
            $table->double('superficie')->nullable();
            $table->double('precio')->nullable();
            $table->double('renta_mensual')->nullable();
            $table->double('iva')->nullable();
            $table->double('renta_total')->nullable();
            $table->string('observaciones')->nullable();
            $table->boolean('estatus')->nullable();
            $table->foreignId('empresa_id')->references('id')->on('empresas');
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
        Schema::dropIfExists('naves');
        
    }
}
