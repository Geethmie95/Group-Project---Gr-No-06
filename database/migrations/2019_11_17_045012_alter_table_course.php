<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('level');
            $table->string('credit');
            $table->string('course_code');
            $table->tinyInteger('theory');
            $table->tinyInteger('practical');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('practical');
            $table->dropColumn('level');
            $table->dropColumn('credit');
            $table->dropColumn('course_code');
            $table->dropColumn('theory');
        });
    }
}
