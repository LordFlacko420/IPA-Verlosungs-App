<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChristmasRecordView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("
            CREATE VIEW IF NOT EXISTS usersplayed
            AS 
            SELECT
                    users.name,
                    users.email,
                	geschenkliste.gift
            FROM
                users
                LEFT JOIN geschenkliste ON users.id = geschenkliste.id
            WHERE
                users.hat_gespielt
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //View::dropIfExists('christmas_record_view');
        //View::dropIfExists('usersplayed');
    }
}
