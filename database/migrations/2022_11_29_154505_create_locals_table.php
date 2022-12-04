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
        Schema::create('locals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_local')->nullable();
            $table->foreignId('usuario_id')->nullable()->constrained()->onDelete('set null'); 
            $table->string('ubicacion')->nullable();
            $table->bigInteger('telefono');
            $table->bigInteger('precio');
            $table->bigInteger('capacidad');
            $table->bigInteger('tamano');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
};
