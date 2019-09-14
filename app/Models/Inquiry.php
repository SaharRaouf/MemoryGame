<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model {
/**
* The database table used by the model.
*
* @var string
*/
    protected $table = 'inquiries';
    protected  $fillable =[
        'token',
        'gender',
        'birth_date',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5',
        'answer6',
        'observation'

    ];
    /**
     * An Inquiry belongs to a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo('App\User');
    }
}
