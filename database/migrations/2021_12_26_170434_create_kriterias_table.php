<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriterias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('wisata_id')->nullable();
            $table->string('biaya')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('jarak')->nullable();
            $table->string('keamanan')->nullable();
            $table->string('kondisi')->nullable();
            $table->timestamps();

            $table->foreign('wisata_id')
                ->references('id')->on('wisatas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kriterias');
    }
}
