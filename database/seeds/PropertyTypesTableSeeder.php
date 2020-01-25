<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('property_types')->truncate();

        DB::table('property_types')->insert([
            ['type' => 'Maison'],
            ['type' => 'Appartement'],
            ['type' => 'Commerce'],
            ['type' => 'Terrain'],
            ['type' => 'Propriété'],
            ['type' => 'Bureau'],
            ['type' => 'Immeuble'],
            ['type' => 'Parking'],
            ['type' => 'Château'],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
