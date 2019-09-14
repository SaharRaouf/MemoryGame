<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuestionsTableSeeder extends Seeder {

    public function run() {

        DB::table('questions')->truncate();

        // id: 1
        App\Question::create([
            'description' => 'Ett par gymnastikskor kan väga 5...?',
            'topic_id' => 1
        ]);

        // id: 2
        App\Question::create([
            'description' => 'Vad betyder ordet hekto?',
            'topic_id' => 1
        ]);

        // id: 3
        App\Question::create([
            'description' => 'En pojke kan väga 30...?',
            'topic_id' => 1
        ]);

        // id: 4
        App\Question::create([
            'description' => 'En myra kan väga 2...?',
            'topic_id' => 1
        ]);

        // id: 5
        App\Question::create([
            'description' => 'Hur många gram går det på 1 kilo (kg)?',
            'topic_id' => 1
        ]);

        // id: 6
        App\Question::create([
            'description' => 'Vilka enheter står i rätt ordning (kortast först)?',
            'topic_id' => 1
        ]);

        // id: 7
        App\Question::create([
            'description' => 'En nyckelpiga är 6 .......',
            'topic_id' => 1
        ]);

        //id:8
        App\Question::create([
            'description' => 'Ungefär hur lång är en blyertspenna (ny)?',
            'topic_id' =>1
        ]);

        //id: 9
        App\Question::create([
            'description' => 'Vilket är längst?',
            'topic_id' =>1
        ]);

        //id:10
        App\Question::create([
            'description' => 'Avståndet mellan Göteborg och Stockholm är 500 ....',
            'topic_id' =>1
        ]);

        //Swedish Questions
        //id:11
        App\Question::create([
            'description' => 'Vad är ett verb?',
            'topic_id' => 2
        ]);
        //id:12
        App\Question::create([
            'description' => 'Vad är ett verb?',
            'topic_id' => 2
        ]);
        //id:13
        App\Question::create([
            'description' => 'Vad är ett adjektiv?',
            'topic_id' => 2
        ]);
        //id:14
        App\Question::create([
            'description' => 'Vilket är ett substantiv?',
            'topic_id' => 2
        ]);
        //id:15
        App\Question::create([
            'description' => 'Vilket är ett verb?',
            'topic_id' => 2
        ]);
        //id:16
        App\Question::create([
            'description' => 'Vilket är ett verb?',
            'topic_id' => 2
        ]);
        //id:17
        App\Question::create([
            'description' => 'Vilket är substantiv?',
            'topic_id' => 2
        ]);
        //id:18
        App\Question::create([
            'description' => 'Vilket är ett adjektiv?',
            'topic_id' => 2
        ]);
        //id:19
        App\Question::create([
            'description' => 'Vilket är ett adjektiv?',
            'topic_id' => 2
        ]);
        //id:20
        App\Question::create([
            'description' => 'Vilket är ett substantiv?',
            'topic_id' => 2
        ]);

    }

}