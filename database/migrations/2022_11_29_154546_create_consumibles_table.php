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
        Schema::create('consumibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sillas')->nullable();
            $table->bigInteger('mesas')->nullable();
            $table->bigInteger('comida')->nullable();
            $table->bigInteger('bebidas')->nullable();
            $table->bigInteger('decoraciones')->nullable();
            $table->foreignId('evento_id')->nullable()->constrained()->onDelete('set null');   
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
        Schema::dropIfExists('consumibles');
    }
};
