<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('teachers')->insert([
            'id' => 1, 'teacherName' => 'Van Broeckhoven H.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 2, 'teacherName' => 'Cauwenberg B.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 3, 'teacherName' => 'Philips J.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 4, 'teacherName' => 'De Schutter G.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 5, 'teacherName' => 'Bens M.-L.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 6, 'teacherName' => 'Van Dooren M.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 7, 'teacherName' => 'Schryvers S.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 8, 'teacherName' => 'Swaans L.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 9, 'teacherName' => 'van Bergen M.',
        ]);

        DB::table('teachers')->insert([
        	'id' => 10, 'teacherName' => 'Vervoort K.',
        ]);
        DB::table('teachers')->insert([
        	'id' => 11, 'teacherName' => 'Degrauwe W.',
        ]);
    }
}
