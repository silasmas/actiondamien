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
        Schema::create('soutenirs', function (Blueprint $table) {
            $table->id();
            $table->json('titre1')->nullable();
            $table->json('titre2')->nullable();
            $table->json('detail')->nullable();
            $table->json('txtbtn')->nullable();
            $table->json('titre')->nullable();
            $table->json('description')->nullable();
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
        Schema::dropIfExists('soutenirs');
    }
};
