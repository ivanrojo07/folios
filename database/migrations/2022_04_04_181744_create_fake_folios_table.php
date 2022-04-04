<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakeFoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fake_folios', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->unsignedBigInteger('real_folio_id');
            $table->foreign('real_folio_id')->references('id')->on('real_folios');
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
        Schema::dropIfExists('fake_folios');
    }
}
