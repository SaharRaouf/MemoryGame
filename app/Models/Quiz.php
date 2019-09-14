<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Quiz extends Model {
    public $timestamps = false;
    protected $table='quizzes';
    protected  $fillable =[

        'quiz_name',
        'choice1',
        'choice2',
        'choice3',
        'answer'
    ];

    public function ScopeGetNext($query,$id){

     return $query->where('quizzes.id', '>', $id->id)->get()->first();


    }

}


