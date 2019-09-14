<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AnswersTableSeeder extends Seeder {

    public function run() {

        DB::table('answers')->truncate();

        App\Answer::create([
            'description' => 'g',
            'is_correct'  => false,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => '10',
            'is_correct'  => false,
            'question_id' => 2,
        ]);

        App\Answer::create([
            'description' => '1',
            'is_correct'  => false,
            'question_id' => 2,
        ]);

        App\Answer::create([
            'description' => 'hg',
            'is_correct'  => true,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => 'kg',
            'is_correct'  => false,
            'question_id' => 1,
        ]);

        App\Answer::create([
            'description' => '100',
            'is_correct'  => true,
            'question_id' => 2,
        ]);

        App\Answer::create([
            'description' => 'kg',
            'is_correct'  => true,
            'question_id' => 3,
        ]);

        App\Answer::create([
            'description' => 'g',
            'is_correct'  => false,
            'question_id' => 3,
        ]);
        App\Answer::create([
            'description' => 'hg',
            'is_correct'  => false,
            'question_id' => 3,
        ]);
        App\Answer::create([
            'description' => 'kg',
            'is_correct'  => false,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => 'g',
            'is_correct'  => true,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => 'hg',
            'is_correct'  => false,
            'question_id' => 4,
        ]);

        App\Answer::create([
            'description' => '100',
            'is_correct'  => false,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => '10',
            'is_correct'  => false,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => '1000',
            'is_correct'  => true,
            'question_id' => 5,
        ]);

        App\Answer::create([
            'description' => 'cm, mm, dm, m',
            'is_correct'  => false,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'm, dm, cm, mm',
            'is_correct'  => false,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'mm, cm, dm, m',
            'is_correct'  => true,
            'question_id' => 6,
        ]);

        App\Answer::create([
            'description' => 'mm',
            'is_correct'  => true,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'cm',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'dm',
            'is_correct'  => false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => 'm',
            'is_correct'  =>false,
            'question_id' => 7,
        ]);

        App\Answer::create([
            'description' => '15mm',
            'is_correct'  => false,
            'question_id' => 8,
        ]);

        App\Answer::create([
            'description' => '15cm',
            'is_correct'  => true,
            'question_id' => 8,
        ]);
        App\Answer::create([
            'description' => '15dm',
            'is_correct'  => false,
            'question_id' => 8,
        ]);
        App\Answer::create([
            'description' => '15m',
            'is_correct'  => false,
            'question_id' => 8,
        ]);
        App\Answer::create([
            'description' => '300cm',
            'is_correct'  => true,
            'question_id' => 9,
        ]);
        App\Answer::create([
            'description' => '1m',
            'is_correct'  => false,
            'question_id' => 9,
        ]);
        App\Answer::create([
            'description' => '2dm',
            'is_correct'  => false,
            'question_id' => 9,
        ]);
        App\Answer::create([
            'description' => 'mm',
            'is_correct'  => false,
            'question_id' => 10,
        ]);
        App\Answer::create([
            'description' => 'km',
            'is_correct'  => true,
            'question_id' => 10,
        ]);
        App\Answer::create([
            'description' => 'm',
            'is_correct'  => false,
            'question_id' => 10,
        ]);
        App\Answer::create([
            'description' => 'mil',
            'is_correct'  => false,
            'question_id' => 10,
        ]);
        //Swedish answer

        App\Answer::create([
            'description' => 'Åt',
            'is_correct'  => true,
            'question_id' => 11,
        ]);
        App\Answer::create([
            'description' => 'Rödare',
            'is_correct'  => false,
            'question_id' => 11,
        ]);
        App\Answer::create([
            'description' => 'Ferrari',
            'is_correct'  => false,
            'question_id' => 11,
        ]);

        App\Answer::create([
            'description' => 'Keps',
            'is_correct'  => false,
            'question_id' => 12,
        ]);
        App\Answer::create([
            'description' => 'Gjorde',
            'is_correct'  => true,
            'question_id' => 12,
        ]);
        App\Answer::create([
            'description' => 'Snabb',
            'is_correct'  => false,
            'question_id' => 12,
        ]);

        App\Answer::create([
            'description' => 'Träna',
            'is_correct'  => false,
            'question_id' => 13,
        ]);
        App\Answer::create([
            'description' => 'Ärligast',
            'is_correct'  => true,
            'question_id' => 13,
        ]);
        App\Answer::create([
            'description' => 'Spel',
            'is_correct'  => false,
            'question_id' => 13,
        ]);
        App\Answer::create([
            'description' => 'Mulligast',
            'is_correct'  => false,
            'question_id' => 14,
        ]);
        App\Answer::create([
            'description' => 'gjorde',
            'is_correct'  => false,
            'question_id' => 14,
        ]);
        App\Answer::create([
            'description' => 'Sula',
            'is_correct'  => true,
            'question_id' => 14,
        ]);
        App\Answer::create([
            'description' => 'Gave',
            'is_correct'  => true,
            'question_id' => 15,
        ]);
        App\Answer::create([
            'description' => 'Krullig',
            'is_correct'  => false,
            'question_id' => 15,
        ]);
        App\Answer::create([
            'description' => 'Sula',
            'is_correct'  => false,
            'question_id' => 15,
        ]);
        App\Answer::create([
            'description' => 'Tokigast',
            'is_correct'  => false,
            'question_id' => 16,
        ]);
        App\Answer::create([
            'description' => 'Tranan',
            'is_correct'  => false,
            'question_id' => 16,
        ]);
        App\Answer::create([
            'description' => 'Tränat',
            'is_correct'  => true,
            'question_id' => 16,
        ]);
        App\Answer::create([
            'description' => 'Göra',
            'is_correct'  => false,
            'question_id' => 17,
        ]);
        App\Answer::create([
            'description' => 'Keps',
            'is_correct'  => true,
            'question_id' => 17,
        ]);
        App\Answer::create([
            'description' => 'Snabb',
            'is_correct'  => false,
            'question_id' => 17,
        ]);
        App\Answer::create([
            'description' => 'Gav',
            'is_correct'  => false,
            'question_id' => 18,
        ]);
        App\Answer::create([
            'description' => 'Krullig',
            'is_correct'  => true,
            'question_id' => 18,
        ]);
        App\Answer::create([
            'description' => 'Keps',
            'is_correct'  => false,
            'question_id' => 18,
        ]);
        App\Answer::create([
            'description' => 'Krona',
            'is_correct'  => false,
            'question_id' => 19,
        ]);
        App\Answer::create([
            'description' => 'Viktigt',
            'is_correct'  => false,
            'question_id' => 19,
        ]);
        App\Answer::create([
            'description' => 'Spela',
            'is_correct'  => true,
            'question_id' => 19,
        ]);
        App\Answer::create([
            'description' => 'Tokigast',
            'is_correct'  => false,
            'question_id' => 20,
        ]);
        App\Answer::create([
            'description' => 'Tränat',
            'is_correct'  => false,
            'question_id' => 20,
        ]);
        App\Answer::create([
            'description' => 'Tranan',
            'is_correct'  => true,
            'question_id' => 20,
        ]);
    }

}