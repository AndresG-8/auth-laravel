<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER add_avatar AFTER INSERT 
            ON users FOR EACH ROW INSERT INTO datos (user_id, path, created_at) 
            VALUES (NEW.id, default.jpg, CURRENT_TIMESTAMP() )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER add_avatar');
    }

       
}

