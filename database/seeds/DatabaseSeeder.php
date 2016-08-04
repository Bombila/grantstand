<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            array(
                'name' => 'logo',
                )
        );
        /*DB::table('settings')->insert(
            array(
                'name' => 'home',
                'page' => 'home',
            )
        );
        DB::table('settings')->insert(
            array(
                'name' => 'services',
                'page' => 'services',
            )
        );
        DB::table('settings')->insert(
            array(
                'name' => 'clients',
                'page' => 'clients',
            )
        );
        DB::table('settings')->insert(
            array(
                'name' => 'about',
                'page' => 'about',
            )
        );
        DB::table('settings')->insert(
            array(
                'name' => 'mobile',
                'page' => 'mobile',
            )
        );*/

    }
}
