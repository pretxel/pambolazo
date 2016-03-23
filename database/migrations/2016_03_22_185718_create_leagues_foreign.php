<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('leagues', function ($table) {
        $table->foreign('country_id')->references('id')->on('countries');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('leagues', function ($table) {
        $table->dropForeign('leagues_country_id_foreign');

      });
    }
}
