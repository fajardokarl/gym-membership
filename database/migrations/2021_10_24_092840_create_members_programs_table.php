<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('members_id')
                ->constrained('members')
                ->onDelete('cascade');
            $table->foreignId('program_id')
                ->constrained('programs')
                ->onDelete('cascade');
            $table->foreignId('trainer_id')
                ->constrained('trainers')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_programs');
    }
}
