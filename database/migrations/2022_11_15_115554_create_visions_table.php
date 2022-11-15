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
        Schema::create('visions', function (Blueprint $table) {
            $table->id();
            $table->json('titre1')->nullable();
            $table->json('titre2')->nullable();
            $table->json('h1banner')->nullable();
            $table->json('titre3')->nullable();
            $table->json('titreMaladi')->nullable();
            $table->json('detailMaladie')->nullable();
            $table->string('imgmaladie')->nullable();
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
        Schema::dropIfExists('visions');
    }
};
