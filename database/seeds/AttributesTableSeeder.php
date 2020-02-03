<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('attributes')->truncate();

        DB::table('attributes')->insert([
            [
                'name' => 'furnished',
                'display_name' => 'Bien meublé ou non-meublé',
                'is_mandatory' => true,
            ],
            [
                'name' => 'nb_rooms',
                'display_name' => 'Nombre de pièces',
                'is_mandatory' => true,
            ],
            [
                'name' => 'superficie',
                'display_name' => 'Superficie en m2',
                'is_mandatory' => true,
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
