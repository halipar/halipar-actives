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
        #lembrar de descobrir como deletar a tabela pelo php
        #Schema::drop('table'); --> Deleta sem fazer uma verificação prévia
        Schema::dropIfExists('products'); #primeiro verifica depois deleta
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
