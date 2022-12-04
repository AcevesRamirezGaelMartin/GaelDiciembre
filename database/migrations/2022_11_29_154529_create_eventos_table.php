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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
          
            $table->string('nombre_evento');
            $table->foreignId('usuario_id')->nullable()->constrained()->onDelete('set null');   
            $table->foreignId('local_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('usuario_id')->nullable()->constrained()->onDelete('set null');
            $table->bigInteger('invitaciones')->nullable();
            $table->date('fecha')->nullable();
            $table->date('horario')->nullable();
            $table->string('ubicacion')->nullable();
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
        Schema::dropIfExists('eventos');
    }
};
