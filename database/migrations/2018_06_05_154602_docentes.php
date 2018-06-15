<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombres',20);
            $table->string('apellidos',20);
            $table->string('no_escalafon',7);
            $table->string('no_dui',10);
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
        Schema::dropIfExists('Docentes');
    }
}
