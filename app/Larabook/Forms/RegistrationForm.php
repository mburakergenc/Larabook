<?php
namespace Larabook\Forms;
use Laracasts\Validation\FormValidator;

/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/13/14
 * Time: 9:43 PM
 */

/**
 * Validation Rules for the registration form
 *
 */

    class RegistrationForm extends FormValidator{
        protected $rules = [

            'username'=>'required|alpha|unique:users',
            'email'=>'required|email|unique:users',
            'password'=> 'required|confirmed'

        ];



    }