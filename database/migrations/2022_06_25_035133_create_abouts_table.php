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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50)->nullable();
            $table->string('deskrispsi_judul',500)->nullable();
            $table->string('sub_judul',50)->nullable();
            $table->string('deskripsi_sub_judul',500)->nullable();
            $table->string('pertanyaan1',20)->nullable();
            $table->string('jawaban1',20)->nullable();
            $table->string('pertanyaan2',20)->nullable();
            $table->string('jawaban2',20)->nullable();
            $table->string('pertanyaan3',20)->nullable();
            $table->string('jawaban3',20)->nullable();
            $table->string('pertanyaan4',20)->nullable();
            $table->string('jawaban4',20)->nullable();
            $table->string('pertanyaan5',20)->nullable();
            $table->string('jawaban5',20)->nullable();
            $table->string('pertanyaan6',20)->nullable();
            $table->string('jawaban6',20)->nullable();
            $table->string('datapenunjang',500)->nullable();
            $table->string('gambar')->nullable();


            $table->string('judul_skill')->nullable();
            $table->string('deskripsi_judul_skill' ,500)->nullable();
            $table->string('skill1',20)->nullable();
            $table->integer('proses_skill1')->nullable();
            $table->string('skill2',20)->nullable();
            $table->integer('proses_skill2')->nullable();
            $table->string('skill3',20)->nullable();
            $table->integer('proses_skill3')->nullable();
            $table->string('skill4',20)->nullable();
            $table->integer('proses_skill4')->nullable();
            $table->string('skill5',20)->nullable();
            $table->integer('proses_skill5')->nullable();
            $table->string('skill6',20)->nullable();
            $table->integer('proses_skill6')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
