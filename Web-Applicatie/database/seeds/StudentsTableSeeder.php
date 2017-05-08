<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('students')->insert([
            'id' => 1, 'studentName' => 'Jelle', 'studentNumber' => 11, 
        ]);
        DB::table('students')->insert([
        	'id' => 2, 'studentName' => 'Jef', 'studentNumber' => 7,
        ]);
    }
}
