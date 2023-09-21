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
        Schema::create('administradores', function (Blueprint $table) {
            $table->id('ide_adm');
            $table->string('nom_adm',30);
            $table->string('cor_adm',100)->unique();
            $table->string('con_adm',100);
       //     $table->string('per_adm',280);
            $table->boolean('est_adm');
            $table->string('for_adm',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};
