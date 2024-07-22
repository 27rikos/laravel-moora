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
        Schema::create('respons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('alternatif');
            $table->double('kriteria1');
            $table->double('kriteria2');
            $table->double('kriteria3');
            $table->double('kriteria4');
            $table->double('kriteria5');
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
        Schema::dropIfExists('respons');
    }
};