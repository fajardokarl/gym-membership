<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->float('price')->default(0);
            $table->date('price_updated')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if ( Schema::hasColumns('programs', ['price', 'price_updated']) ) {
            Schema::table('programs', function (Blueprint $table) {
                $table->dropColumn('price');
                $table->dropColumn('price_updated');
            });
        }
    }
}