<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_en');
            $table->string('subtitle');
            $table->string('subtitle_en');
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->string('slug')->unique();
            $table->boolean('venezuela');
            $table->boolean('colombia');
            $table->boolean('panama');
            $table->boolean('usa');
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
        Schema::dropIfExists('equipos');
    }
}
