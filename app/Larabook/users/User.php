<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;


class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait, EventGenerator;

    /**
     * Which fields may be mass assigned.
     *
     */


    /**
     * Password Hashing
     */
    public function setPasswordAttribute($password)
    {

        $this->attributes['password'] = hash::make($password);
    }

    protected $fillable = ['username', 'email', 'password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');


    /**
     * Register a new user
     *
     */
    public static function register($username, $email, $password)
    {

        $user = new static(compact('username', 'email', 'password'));
        $user->raise(new UserRegistered($user));
        return $user;
    }

    public function statuses()
    {


        return $this->hasMany('Larabook\Statuses\Status');
    }


    /**
     * Show a gravatar
     *
     */
    public function gravatarLink()
    {

        $email = md5($this->email);
        return "//www.gravatar.com/avatar/{$email}?s=30";

    }
    /**
     * Determine if the given user same as the current one
     */
    public function is($user){

        return $this->username == $user->username;

    }


    /**
     * Get the lists of users that the current user follows
     * @return mixed
     */
    public function follows(){
        return $this->belongsToMany(self::class,'follows','follower_id','followed_id')
            ->withTimeStamps();
    }


    /**
     * Get the list of users who follow the current user
     * @return mixed
     */
    public function followers(){

        return $this->belongsToMany(self::class,'follows','followed_id','follower_id')
            ->withTimeStamps();
    }


    /**
     * Determine if current user follows another user
     * @param User $otherUser
     * @return bool
     */
    public function isFollowedBy(User $otherUser){

        $idsWhoOtherUserFollows = $otherUser->follows()->lists('followed_id');
        return in_array($this->id,$idsWhoOtherUserFollows);
    }
}