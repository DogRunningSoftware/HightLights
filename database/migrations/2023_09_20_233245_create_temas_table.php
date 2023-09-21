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
        Schema::create('temas', function (Blueprint $table) {
            $table->id('ide_tem');
            $table->foreign('ide_usu')->references('ide_usu')->on('usuarios');
            $table->string('con_tem',280);
            $table->string('sub_tem',280);
            $table->string('tem_tem',280);
            $table->integer('lik_tem');
            $table->integer('com_tem');
            $table->integer('vis_tem');
            $table->boolean('est_tem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
