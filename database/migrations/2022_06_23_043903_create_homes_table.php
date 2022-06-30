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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('profesi1',50);
            $table->string('profesi2',50);
            $table->string('profesi3',50);
            $table->string('icon1',25);
            $table->string('link1',50);
            $table->string('icon2',25);
            $table->string('link2',50);
            $table->string('icon3',25);
            $table->string('link3',50);
            $table->string('icon4',25);
            $table->string('link4',50);
            $table->string('icon5',25);
            $table->string('link5',50);
            
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
        Schema::dropIfExists('homes');
    }
};
