<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Result extends Model {
    protected $table = 'quiz_results';
    protected $fillable = [
        'token',

    ];
    public function user(){

        return $this->belongsTo('App\User');
    }
    public  function quiz(){
        return $this->belongsTo('App\Model\Quiz');
    }
}