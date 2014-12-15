<?php namespace Larabook\Statuses;
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/21/14
 * Time: 9:33 PM
 */


class PublishStatusCommand
{
    public $body;

    public $userId;


    function __construct($body, $userId)
    {

        $this->body = $body;
        $this->userId = $userId;


    }



}
