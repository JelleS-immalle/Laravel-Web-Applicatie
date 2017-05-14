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
        //CAUTION! Bij het seeden van Software met id=0, zet het programma Software voor één of andere reden onderaan met id=17
        DB::table('subjects')->insert([
            'id' => 1, 'subjectName' => 'Software', 'teacher_id'=> 1,
        ]);
        DB::table('subjects')->insert([
            'id' => 2, 'subjectName' => 'Natuurwetenschappen', 'teacher_id'=> 1,
        ]);
        DB::table('subjects')->insert([
            'id' => 3, 'subjectName' => 'Systeembeheer', 'teacher_id'=> 2,
        ]);
        DB::table('subjects')->insert([
            'id' => 4, 'subjectName' => 'Wiskunde', 'teacher_id'=> 2,
        ]);
        DB::table('subjects')->insert([
            'id' => 5, 'subjectName' => 'Geschiedenis', 'teacher_id'=> 11,
        ]);
        DB::table('subjects')->insert([
            'id' => 6, 'subjectName' => 'Aardrijkskunde', 'teacher_id'=> 4,
        ]);
        DB::table('subjects')->insert([
            'id' => 7, 'subjectName' => 'Esthetica', 'teacher_id'=> 5,
        ]);
        DB::table('subjects')->insert([
            'id' => 8, 'subjectName' => 'Nederlands', 'teacher_id'=> 6,
        ]);
        DB::table('subjects')->insert([
            'id' => 9, 'subjectName' => 'Engels', 'teacher_id'=> 7,
        ]);
        DB::table('subjects')->insert([
            'id' => 10, 'subjectName' => 'Frans', 'teacher_id'=> 5,
        ]);
        DB::table('subjects')->insert([
            'id' => 11, 'subjectName' => 'Bedrijfsbeheer', 'teacher_id'=> 8,
        ]);
        DB::table('subjects')->insert([
            'id' => 12, 'subjectName' => 'Stage', 'teacher_id'=> 1,
        ]);
        DB::table('subjects')->insert([
            'id' => 13, 'subjectName' => 'Zakelijke Communicatie', 'teacher_id'=> 9,
        ]);
        DB::table('subjects')->insert([
            'id' => 14, 'subjectName' => 'Godsdienst', 'teacher_id'=> 3,
        ]);
        DB::table('subjects')->insert([
            'id' => 15, 'subjectName' => 'L.O.', 'teacher_id'=> 10,
        ]);
    }
}
