<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_en');
            $table->string('subtitle');
            $table->string('subtitle_en');
            $table->text('project');
            $table->text('project_en');
            $table->string('equipos');
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
        Schema::dropIfExists('obras');
    }
}
