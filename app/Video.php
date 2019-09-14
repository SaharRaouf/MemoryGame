<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
class Video extends Model {
    public $timestamps = false;
    protected $table='videos';
    protected  $fillable =[

        'name',
        'subject',
        'grade',
        'description',
        'youtube_url'
    ];

    /**
     * Returns a formatted post content entry,
     * this ensures that line breaks are returned.
     *
     * @return string

    public function content() {
        return nl2br($this -> content);
    }
*/




}
