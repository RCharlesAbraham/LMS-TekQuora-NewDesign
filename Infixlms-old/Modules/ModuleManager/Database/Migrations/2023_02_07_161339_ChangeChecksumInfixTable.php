<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeChecksumInfixTable extends Migration
{
    public function up()
    {
        try {
            Schema::table('infix_module_managers', function (Blueprint $table) {
                if (Schema::hasColumn('infix_module_managers', 'checksum')) {
                    $table->text("checksum")->nullable()->change();
                }
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
