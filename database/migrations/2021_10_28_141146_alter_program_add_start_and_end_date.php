<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProgramAddStartAndEndDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_program', function (Blueprint $table) {
            $table->date('start_date')->default(now());
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if ( Schema::hasColumns('member_program', ['start_date', 'end_date']) ) {
            Schema::table('programs', function (Blueprint $table) {
                $table->dropColumn('end_date');
                $table->dropColumn('start_date');
            });
        }
    }
}
