<?php namespace Larabook\Statuses;
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/21/14
 * Time: 9:16 PM
 */
use Larabook\statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;



    class status extends \Eloquent{



        /**
         *
         * A status belongs to a user
         *
         */
        public function user(){

            return $this->belongsTo('Larabook\Users\User');


        }

        use EventGenerator;

        protected $fillable = ['body'];

        /**
         *
         * Fillable fields for a new status
         *
         */
        public static function publish($body){

            $status = new static(compact('body'));

            $status->raise(new StatusWasPublished($body));
            return $status;
        }



    }
