<?php namespace Larabook\Statuses;
use Larabook\Users\User;

/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/21/14
 * Time: 9:52 PM
 */


    class StatusRepository{


        /**
         * Show statuses on profile page
         */

        public function getAllForUser(User $user){

            return $user->statuses()->with('user')->latest()->get();

        }


        /**
         * Get the feed for a user
         * @param User $user
         * @return mixed
         */
        public function getFeedForUser(User $user){

            $userIds = $user->follows()->lists('followed_id');
            $userIds[] = $user->id;

            return Status::whereIn("user_id",$userIds)->latest()->get();

        }


        /**
         * Save a new status for user
         */


        public function save(Status $status, $userId){

           return User::findOrFail($userId)->statuses()->save($status);

        }

    }