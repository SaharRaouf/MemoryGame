<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App
 */
class Tag extends Model {
    protected $fillable=[
        'name'
    ];
	//
    /**
     * Get the message associate with given tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function message(){
    return $this->belongsToMany('App\Message',"message_tag");
}
}
