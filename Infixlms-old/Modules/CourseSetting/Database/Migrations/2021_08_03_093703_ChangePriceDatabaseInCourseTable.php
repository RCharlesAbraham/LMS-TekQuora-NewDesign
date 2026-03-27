<?php

use Doctrine\DBAL\Types\FloatType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePriceDatabaseInCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            Schema::table('courses', function (Blueprint $table) {
                $table->float("price", 20, 2)->nullable()->default(0.00)->change();
                $table->float("discount_price", 20, 2)->nullable()->default(0.00)->change();
            });

            Schema::table('virtual_classes', function (Blueprint $table) {
                $table->float("fees", 20, 2)->nullable()->default(0.00)->change();
            });
        } catch (\Throwable $e) {
            // Skip DBAL float issues on fresh install
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
