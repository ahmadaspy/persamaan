<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMencoba1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mencoba_1s', function (Blueprint $table) {
            $table->id();
            $table->string('soal_1');
            $table->string('soal_2');
            $table->float('jawaban_x_1_1');
            $table->float('jawaban_x_1_2');
            $table->float('jawaban_y_1_1');
            $table->float('jawaban_y_1_2');
            $table->float('jawaban_x_2_1');
            $table->float('jawaban_x_2_2');
            $table->float('jawaban_y_2_1');
            $table->float('jawaban_y_2_2');
            $table->float('titik_potong_1');
            $table->float('titik_potong_2');
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
        Schema::dropIfExists('mencoba_1s');
    }
}
