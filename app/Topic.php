<?php namespace App;
/**
 * Created by PhpStorm.
 * User: sahariii
 * Date: 8/4/15
 * Time: 4:41 PM
 */
use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	protected $fillable = ['name', 'title', 'description', 'base_topic_id'];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function replies()
    {
        return $this->hasManyThrough('App\Reply', 'App\Question');
    }

    public function baseTopic()
    {
        return $this->belongsTo('App\BaseTopic');
    }

}
