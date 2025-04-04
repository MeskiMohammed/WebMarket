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
        Schema::create('details_achats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achat_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->integer('quantite');
            $table->float('prix_ht');
            $table->float('tva');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_achats');
    }
};
