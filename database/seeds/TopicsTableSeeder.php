<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TopicsTableSeeder extends Seeder {

    public function run() {

        DB::table('topics')->truncate();

        // id: 1
        App\Topic::create([
            'name'=>'mate',
            'title'=>'Matematik 5',
            'description'=>'Vi övar på att använda olika enheter för längd, volym, vikt och tid. Vi övar även på att skriva om värden med hjälp av olika enheter.'
        ]);

        // id: 2
        App\Topic::create([
            'name'=>'språk',
            'title'=>'Svenska',
            'description'=>'Ordklasser'
        ]);


    }
}