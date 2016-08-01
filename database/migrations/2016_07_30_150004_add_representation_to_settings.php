<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRepresentationToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('representation');
            $table->text('column_1');
            $table->text('column_2');
            $table->text('column_3');
            $table->text('column_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('representation');
            $table->dropColumn('column_1');
            $table->dropColumn('column_2');
            $table->dropColumn('column_3');
            $table->dropColumn('column_4');
        });
    }
}
