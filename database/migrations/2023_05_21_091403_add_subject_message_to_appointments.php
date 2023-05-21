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
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
        });

        $name = request()->input('name');
        $subject = 'Votre sujet ici'; // Remplacez par la valeur souhaitée
        $message = 'Votre message ici'; // Remplacez par la valeur souhaitée
        
        DB::table('appointments')->update([
            'name' => $name,
            'subject' => $subject,
            'message' => $message
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('subject');
            $table->dropColumn('message');
        });
    }
}
