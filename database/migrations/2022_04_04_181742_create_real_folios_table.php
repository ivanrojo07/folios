<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_folios', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->unsignedBigInteger('establishment_id');
            $table->foreign('establishment_id')->references('id')->on('establishments');
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
        Schema::dropIfExists('real_folios');
    }
}
