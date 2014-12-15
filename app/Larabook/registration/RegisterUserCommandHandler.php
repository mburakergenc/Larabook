<?php namespace Larabook\Registration;
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/15/14
 * Time: 12:25 AM
 */



use Laracasts\Commander\CommandHandler;
use Larabook\Users\UserRepository;
use Larabook\Users\User;
use Laracasts\Commander\Events\DispatchableTrait;

class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $repository;

    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function handle($command)
    {

        $user = User::register(

            $command->username, $command->email, $command->password
        );

        $this->repository->save($user);


        $this->dispatchEventsFor($user);

        return $user;
    }

} 