<?php

use Larabook\Forms\RegistrationForm;
use Larabook\registration\RegisterUserCommand;
use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {

    use Larabook\Core\CommandBus;

    /**
     * Registration Form
     *
     */


    private $registrationForm;
    function __construct(CommandBus $commandBus, RegistrationForm $registrationForm){

        $this->registrationForm = $registrationForm;
        $this->commandBus = $commandBus;
        $this->beforeFilter('guest');
    }

    /**
     * Show a form to register a user.
     *
     */
    public function create()
    {
        return View::make('registration.create');
    }

    /**
     * Create a new Larabook User
     *
     */

    public function store()

    {

        $this->registrationForm->validate(Input::all());

        extract(Input::only('username','email','password'));


        $user = $this->commandBus->execute(
            new RegisterUserCommand($username,$email,$password)
        );


        Auth::login($user);

        Flash::overlay('Welcome! Glad to see you as Larabook Member!', 'Registration Successful');

        return Redirect::action('StatusController@index');

    }



}
