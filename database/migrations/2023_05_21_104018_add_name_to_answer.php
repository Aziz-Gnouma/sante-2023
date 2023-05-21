<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToAnswer extends Migration
{
    public function up()
    {
        Schema::table('answer', function (Blueprint $table) {
            $table->string('name')->nullable();

            $table->foreign('name')->references('name')->on('appointments');
        });
    }

    public function down()
    {
        Schema::table('answer', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
