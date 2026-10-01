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
        Schema::create("stores", function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //aqui eu chamo o id do ususario como chave estrangeira para que cada franquiado acesse apenas a sua loja e caso delete o usuário seja deletado em cascata tudo que estvier vinculado a ele (acho que vou tirar pq acho que n faz sentido deletar um usuario, acho que precisamos ter registrado tudo sobre um franquiado e sua loja mesmo que ela ja tenha fechado)
            $table->string('name');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
    
};
