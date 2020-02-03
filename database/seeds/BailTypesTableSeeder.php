<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BailTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('bail_types')->truncate();

        DB::table('bail_types')->insert([
            ['type' => 'Commercial'],
            ['type' => 'Location non meublé'],
            ['type' => 'Location meublé'],
            ['type' => 'Précaire'],
            ['type' => 'Professionnel'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
