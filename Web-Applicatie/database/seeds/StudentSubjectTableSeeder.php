<?php

use Illuminate\Database\Seeder;

class StudentSubjectTableSeeder extends Seeder
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
        DB::table('student_subject')->insert([
            'id' => 7, 'student_id' => 1, 'subject_id'=> 5,
        ]);
        DB::table('student_subject')->insert([
            'id' => 8, 'student_id' => 1, 'subject_id'=> 6,
        ]);
        DB::table('student_subject')->insert([
            'id' => 9, 'student_id' => 1, 'subject_id'=> 7,
        ]);
        DB::table('student_subject')->insert([
            'id' => 10, 'student_id' => 1, 'subject_id'=> 8,
        ]);
        DB::table('student_subject')->insert([
            'id' => 11, 'student_id' => 1, 'subject_id'=> 9,
        ]);
        DB::table('student_subject')->insert([
            'id' => 12, 'student_id' => 1, 'subject_id'=> 10,
        ]);
        DB::table('student_subject')->insert([
            'id' => 13, 'student_id' => 1, 'subject_id'=> 11,
        ]);
        DB::table('student_subject')->insert([
            'id' => 14, 'student_id' => 1, 'subject_id'=> 12,
        ]);
        DB::table('student_subject')->insert([
            'id' => 15, 'student_id' => 1, 'subject_id'=> 13,
        ]);
        DB::table('student_subject')->insert([
            'id' => 16, 'student_id' => 1, 'subject_id'=> 14,
        ]);
        DB::table('student_subject')->insert([
            'id' => 17, 'student_id' => 2, 'subject_id'=> 5,
        ]);
        DB::table('student_subject')->insert([
            'id' => 18, 'student_id' => 2, 'subject_id'=> 7,
        ]);
        DB::table('student_subject')->insert([
            'id' => 19, 'student_id' => 2, 'subject_id'=> 9,
        ]);
        DB::table('student_subject')->insert([
            'id' => 20, 'student_id' => 2, 'subject_id'=> 11,
        ]);
        DB::table('student_subject')->insert([
            'id' => 21, 'student_id' => 2, 'subject_id'=> 13,
        ]);
    }
}
