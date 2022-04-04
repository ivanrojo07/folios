<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealFolioCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_folio_campaings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_folio_id');
            $table->unsignedBigInteger('campaing_id');
            $table->foreign('real_folio_id')->references('id')->on('real_folios');
            $table->foreign('campaing_id')->references('id')->on('campaings');
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
        Schema::dropIfExists('real_folio_campaings');
    }
}
