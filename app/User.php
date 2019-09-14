<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     *
     * A user can have many messages
     */
    public function message(){

        return $this->hasMany('App\Message');
    }
    /**
     *
     * A user can have many results
     */
    public function result(){

        return $this->hasMany('App\Models\Result');
    }
    /**
     *
     * A user has one inquiry
     */
    public function inquiry(){

        return $this->hasOne('App\Models\Inquiry');
    }
    /**
     * User may have many question replies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    /**
     * Get any available user name to display.
     *
     * @return mixed
     */
    public function anyName()
    {
        $fullNameArray = explode(' ', $this->name);
        $firstName = $fullNameArray[0];

        return current(array_filter([$firstName, $this->name, $this->nickname, $this->email]));
    }

    public function repliesByTopic(Topic $topic)
    {
        $userReplies = $this->replies;

        $topicReplies = $topic->replies;

        return $userReplies->intersect($topicReplies);
    }

    public function correctRepliesByTopic(Topic $topic)
    {
        return $this->repliesByTopic($topic)->filter(function($reply) {
            if ($reply->is_correct == true) {
                return true;
            }
        });
    }

    public function incorrectRepliesByTopic(Topic $topic)
    {
        return $this->repliesByTopic($topic)->filter(function($reply) {
            if ($reply->is_correct == false) {
                return true;
            }
        });
    }

    public function percentCorrectRepliesByTopic(Topic $topic)
    {
        $percent = count($this->correctRepliesByTopic($topic)) * 100 / count($topic->questions);

        return round($percent);
    }

    public function percentIncorrectRepliesByTopic(Topic $topic)
    {
        $percent = count($this->incorrectRepliesByTopic($topic)) * 100 / count($topic->questions);

        return round($percent);
    }

    public function isAdmin()
    {
        $admins = [
            env('ADMIN_EMAIL', 'sahar@kth.se'),
            env('ADMIN_EMAIL_2', ''),
            env('ADMIN_EMAIL_3', '')
        ];

        if (in_array($this->email, $admins))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
