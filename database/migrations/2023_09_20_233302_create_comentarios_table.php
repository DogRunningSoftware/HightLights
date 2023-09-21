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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('ide_com');
            $table->foreign('ide_usu')->references('ide_usu')->on('usuarios');
            $table->foreign('ide_con')->references('ide_con')->on('contrucciones');
            $table->foreign('idx_com')->references('ide_com')->on('comentarios');
            $table->string('con_com',280);
            $table->string('sub_tem',280);
            $table->integer('lik_com');
            $table->integer('com_com');
            $table->boolean('est_com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
