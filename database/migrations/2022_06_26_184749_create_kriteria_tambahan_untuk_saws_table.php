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
        Schema::create('kriteria_tambahan_untuk_saws', function (Blueprint $table) {
            $table->id();
            $table->integer('kategoriWisataId');
            $table->string('penjelasan')->nullable();
            $table->boolean('isBenefit')->nullable();
            $table->double('bobot')->nullable();
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
        Schema::dropIfExists('kriteria_tambahan_untuk_saws');
    }
};
