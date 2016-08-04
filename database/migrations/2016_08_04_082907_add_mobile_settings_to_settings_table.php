<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMobileSettingsToSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('title_1');
            $table->string('title_2');
            $table->string('image_1');
            $table->string('image_2');
            $table->text('text_1');
            $table->text('text_2');
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
            $table->dropColumn('title_1');
            $table->dropColumn('image_1');
            $table->dropColumn('text_1');
            $table->dropColumn('title_2');
            $table->dropColumn('image_2');
            $table->dropColumn('text_2');
        });
    }
}
