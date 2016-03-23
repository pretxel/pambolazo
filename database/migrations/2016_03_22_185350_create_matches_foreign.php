<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('matches', function ($table) {
        $table->foreign('local_team_id')->references('id')->on('teams');
        $table->foreign('visitor_team_id')->references('id')->on('teams');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('matches', function ($table) {
        $table->dropForeign('matches_local_team_id_foreign');
        $table->dropForeign('matches_visitor_team_id_foreign');
      });
    }
}
