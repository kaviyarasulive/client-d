<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRheumatologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rheumatologies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('one');
            $table->string('two');
            $table->string('three');
            $table->string('four');
            $table->string('five');
            $table->string('six');
            $table->string('seven');
            $table->string('eight');
            $table->string('nine');
            $table->string('ten');
            $table->string('eleven');
            $table->string('twelve');
            $table->string('thirteen');
            $table->string('fourteen');
            $table->string('fifteen');
            $table->string('sixteen');
            $table->string('seventeen');
            $table->string('eighteen');
            $table->string('nineteen');
            $table->string('twenty');
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
        Schema::dropIfExists('rheumatologies');
    }
}
