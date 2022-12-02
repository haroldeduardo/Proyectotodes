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
        Schema::create('archivoevento', function (Blueprint $table) {
           $table->id();   
          
            $table->string('ruta');
             /* $table->foreignId('id_publicacion')
          ->constrained('publicacionevento')
            ->cascadeOnDelete()->cascadeOnUpdate();*/

           // $table->string('nombre')->unique;
           // $table->string('imagen')->nullable ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivoevento');
    }
};
