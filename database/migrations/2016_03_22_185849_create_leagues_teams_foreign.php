<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTeamsForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('leagues_teams', function ($table) {
        $table->foreign('league_id')->references('id')->on('leagues');
        $table->foreign('team_id')->references('id')->on('teams');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('leagues_teams', function ($table) {
        $table->dropForeign('leagues_teams_league_id_foreign');
        $table->dropForeign('leagues_teams_team_id_foreign');
      });
    }
}
