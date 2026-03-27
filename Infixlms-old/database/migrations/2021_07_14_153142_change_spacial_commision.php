<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSpacialCommision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            Schema::table('users', function($table){
                $table->string("special_commission", 11)->nullable()->change();
            });
//        \Illuminate\Support\Facades\DB::unprepared('ALTER TABLE `users` CHANGE `special_commission` `special_commission` INT(11) NOT NULL DEFAULT 0');

        } catch (\Throwable $e) {
            // Skip on fresh install
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
