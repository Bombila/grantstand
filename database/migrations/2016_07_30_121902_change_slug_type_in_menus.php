<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSlugTypeInMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->string('slug')->unique();
        });
    }
}
