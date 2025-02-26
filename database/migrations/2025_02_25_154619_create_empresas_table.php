<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('razao_social');
            $table->string('logo')->nullable();
            $table->string('slogan')->nullable();
            $table->double('area_construida');
            $table->date('data_fundacao');
            $table->integer('quantidade_funcionarios');
            $table->string('video_institucional')->nullable();
            $table->integer('status')->default(1);
            $table->timestamp('data_cadastro')->useCurrent();
            $table->timestamp('data_update')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
