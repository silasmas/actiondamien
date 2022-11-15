<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            $table->json('titre1')->nullable();
            $table->json('titre2')->nullable();
            $table->json('maladie')->nullable();
            $table->json('h1maladie')->nullable();
            $table->json('description')->nullable();
            $table->json('txtbtn')->nullable();
            $table->json('txtbtn2')->nullable();
            $table->json('telephone')->nullable();
            $table->json('txtphone')->nullable();
            $table->json('lienvideo')->nullable();
            $table->string('imgarticle')->nullable();
            $table->string('nbr')->nullable();
            $table->json('nbrpays')->nullable();
            $table->string('cover')->nullable();
            $table->foreignId('rubrique_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accueils');
    }
};
