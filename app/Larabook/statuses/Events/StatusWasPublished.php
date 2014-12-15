<?php namespace Larabook\statuses\Events;
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/21/14
 * Time: 9:47 PM
 */

class StatusWasPublished {

    public $body;

    function __construct($body)
    {
        $this->body = $body;
    }


} 