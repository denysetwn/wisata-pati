<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kriteria_id')->nullable();
            $table->string('parkir')->nullable();
            $table->string('masjid')->nullable();
            $table->string('kantin')->nullable();
            $table->string('toilet')->nullable();
            $table->string('wahana')->nullable();
            $table->timestamps();

            $table->foreign('kriteria_id')
                ->references('id')->on('kriterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
