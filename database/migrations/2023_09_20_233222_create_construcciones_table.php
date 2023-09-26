<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('construcciones', function (Blueprint $table) {
            $table->bigIncrements('ide_con');
            $table->unsignedBigInteger('ide_usu');
            $table->foreign('ide_usu')->references('id')->on('users');
            $table->string('nom_con',50);
            $table->string('fot1_con',250);
            $table->string('fot2_con',250);
            $table->string('fot3_con',250);
            $table->string('con_con',100);
            $table->string('txt_con',280);
            $table->integer('lik_con');
            $table->integer('vis_con');
            $table->integer('des_con');
            $table->boolean('est_con');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('construccions');
    }
};
