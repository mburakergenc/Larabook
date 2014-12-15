<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/15/14
 * Time: 12:38 AM
 */

namespace Larabook\users;



class UserRepository {

    /**
     * Persist a user.
     * @param User $user
     * @return
     */

    public function save(User $user){

        return $user->save();
    }
    /**
     * Get a paginated list of all users
     */

    public function getPaginated($howMany = 25){
        return User::orderBy('username','asc')->simplePaginate($howMany);
    }

    /**
     * Fetch a user by their username
     */

    public function findByUsername($username){
        return User::with(['statuses'=>function($query)
        {
            $query->latest();
        }])->whereUsername($username)->first();
    }


    /**
     * Find a user by their id
     * @param $id
     * @return mixed
     */
    public function findById($id){

        return User::findOrFail($id);

    }


    /**
     * Follow a Larabook User
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user){

        return $user->follows()->attach($userIdToFollow);

    }

    /**
     * Unfollow a Larabook User
     * @param $userIdToUnfollow
     * @param User $user
     * @return mixed
     */

    public function unfollow($userIdToUnfollow, User $user){

        return $user->follows()->detach($userIdToUnfollow);

    }

} 