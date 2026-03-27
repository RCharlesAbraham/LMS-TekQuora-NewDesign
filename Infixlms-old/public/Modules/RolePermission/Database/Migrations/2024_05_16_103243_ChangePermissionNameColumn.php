<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class ChangePermissionNameColumn extends Migration
{
    public function up()
    {
        try {
            Schema::table('permissions', function($table){
                $table->longText("name")->nullable()->change();
              $table->longText("old_name")->nullable()->change();
            });
        } catch (\Throwable $e) {
            // Skip on fresh install
        }
    }

    public function down()
    {
        //
    }
}
