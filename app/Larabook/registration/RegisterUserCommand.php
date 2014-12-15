<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/15/14
 * Time: 12:13 AM
 */

namespace Larabook\registration;


class RegisterUserCommand {

    public $username;

    public $email;

    public $password;

    function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

    }

} 