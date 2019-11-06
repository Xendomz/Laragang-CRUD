<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_tabel', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('teachers_id');
            $table->unsignedInteger('students_id');
            $table->Integer('nilai');
            $table->timestamps();

            $table->foreign('teachers_id')
            ->references('id')
            ->on('teachers');

            $table->foreign('students_id')
            ->references('id')
            ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_tabel');
    }
}
