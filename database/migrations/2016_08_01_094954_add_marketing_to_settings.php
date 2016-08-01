<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarketingToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->text('marketing');
            $table->text('box_1');
            $table->text('box_2');
            $table->text('box_3');
            $table->text('box_4');
            $table->text('box_5');
            $table->text('box_6');
            $table->text('box_7');
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
            $table->dropColumn('marketing');
            $table->dropColumn('box_1');
            $table->dropColumn('box_2');
            $table->dropColumn('box_3');
            $table->dropColumn('box_4');
            $table->dropColumn('box_5');
            $table->dropColumn('box_6');
            $table->dropColumn('box_7');
        });
    }
}
