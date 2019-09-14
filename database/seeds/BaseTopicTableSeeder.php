<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BaseTopicTableSeeder extends Seeder {

    public function run() {

        DB::table('base_topics')->truncate();

        // id: 1
        App\BaseTopic::create([
            'name'=>'mate',
            'title'=>'Matematik',
            'description'=>'Grundskolan'
        ]);

        // id: 2
        App\BaseTopic::create([
            'name'=>'språk',
            'title'=>'Språk',
            'description'=>'Grundskolan'
        ]);


    }
}