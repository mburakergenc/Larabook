<?php namespace Larabook\Statuses;
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 11/21/14
 * Time: 9:41 PM
 */




use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;


class PublishStatusCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $statusRepository;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }


    /**
     * Publish a new status
     * @param body
     * @return static
     */
    public function handle($command){

      $status =   Status::publish($command->body);

        $status = $this->statusRepository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;

    }


}