<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('acessoriomaterial', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('status')->default(1);
            $table->timestamp('data_cadastro')->useCurrent();
            $table->timestamp('data_update')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acessoriomaterial');
    }
};
