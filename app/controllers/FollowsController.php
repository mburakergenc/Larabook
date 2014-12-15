<?php
use Larabook\Users\FollowUserCommand;
use Larabook\Users\UnfollowUserCommand;
use Laracasts\Commander\CommanderTrait;


class FollowsController extends \BaseController {

    use CommanderTrait;


	/**
	 * Follow a user
	 *
	 * @return Response
	 */
	public function store()
	{
		//id of the user to follow
        //id of the authenticated user
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(FollowUserCommand::class, $input);
        Flash::success('You are now following this user.');
        return Redirect::back();
	}


	/**
	 * Unfollow a user
	 *
	 * @param  $idOfUserToUnfollow
	 * @return Response
	 */
	public function destroy($userIdToUnfollow)
	{
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(UnfollowUserCommand::class, $input);
        Flash::success("You have now unfollowed this user");

        return Redirect::back();


	}



}
