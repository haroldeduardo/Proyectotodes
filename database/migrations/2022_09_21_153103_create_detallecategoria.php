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
        Schema::create('detallecategoria', function (Blueprint $table) {
            $table->id();
            $table->enum("prioridad", ["Principal", "Secundario"]);// <-- Aquí el enum
            $table->foreignId('id_publicacion')
            ->constrained('publicacionevento')
            ->cascadeOnUpdate();


            $table->foreignId('id_categoria')
            ->nullable()
            ->constrained('categoria')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecategoria');
    }
};
