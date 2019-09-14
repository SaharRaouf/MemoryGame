<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Message extends Model {

	protected  $fillable =[
        'token',
        'title',
        'body',
        'published_at',
        'user_id'   //temporary
    ];
    //treat it like a carbon element
    protected  $dates=['published_at'];


    //show messages which are published until now
    public function ScopePublished($query){

    $query->where('published_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date){

    $this->attributes['published_at']=Carbon::parse($date);
    }
    public function getPublishedAttribute($date){
        return  Carbon::parse($date)->format('y-m-d');
    }


    /**
    *get the tag associate with given model
     */
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with current message
     * @return array
     */
    public function getTagListAttribute(){
        return $this->tags->lists('id');
    }
}
