<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_subject')->insert([
        	'id' => 1, 'student_id' => 1, 'subject_id'=> 1,
        ]);
        DB::table('student_subject')->insert([
        	'id' => 2, 'student_id' => 2, 'subject_id'=> 1,
        ]);
        DB::table('student_subject')->insert([
        	'id' => 3, 'student_id' => 1, 'subject_id'=> 2,
        ]);
        DB::table('student_subject')->insert([
        	'id' => 4, 'student_id' => 1, 'subject_id'=> 3,
        ]);
        DB::table('student_subject')->insert([
        	'id' => 5, 'student_id' => 2, 'subject_id'=> 3,
        ]);
        DB::table('student_subject')->insert([
        	'id' => 6, 'student_id' => 2, 'subject_id'=> 4,
        ]);
    }
}
