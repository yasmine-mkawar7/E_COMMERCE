<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * : Cette méthode crée une nouvelle table dans la base de données. Le premier argument 'categories'
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("nomcategorie",30)->unique();
            $table->string("imagecategorie");
            $table->timestamps();
        });
    }

    /**
     *  Cette commande indique à Laravel de supprimer la table categories si elle existe déjà dans la base de données. Cela évite les erreurs si la table n'existe pas
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
