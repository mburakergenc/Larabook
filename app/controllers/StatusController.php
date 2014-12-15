<?php


use Larabook\Core\CommandBus;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

class StatusController extends \BaseController {



    protected $statusRepository;
    function __construct(statusRepository  $statusRepository )
    {

        $this->statusRepository = $statusRepository;

    }

    use CommandBus;


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



	public function index()
	{

        $statuses = $this->statusRepository->getFeedForUser(Auth::user());
		return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Save a new status
	 *
	 * @return Response
	 */
	public function store()
	{
    $rule = Input::get('body');


        if(Empty($rule)){

        Flash::message('Error. Status body cannot be empty.');
            return Redirect::back();
    }



        else {

            $this->execute(
                new PublishStatusCommand(Input::get('body'), Auth::User()->id)
            );

            Flash::message('Your status has been uptaded');
            return Redirect::back();
        }



    }


    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Log out a user
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function destroy($id)
	{
	//
	}


}
