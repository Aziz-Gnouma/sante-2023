<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubjectMessageToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->string('subject');
            $table->text('message');
            $name = request()->input('name');
            
            DB::table('appointments')->insert([
                'name' => $name,
                'subject' => $subject,
                'message' => $message
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
}
