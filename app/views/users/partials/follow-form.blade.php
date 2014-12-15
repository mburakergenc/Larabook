@if($signedIn)

<!-- Method is in user model -->
@if($user->isFollowedBy($currentUser))

{{ Form::open(['method'=>'DELETE','route'=>['follow_path',$user->id]]) }}


{{ Form::hidden('userIdToUnfollow', $user->id) }}
<button type="submit" class="btn btn-danger">Unfollow {{$user->username}}</button>

{{ Form:: Close()}}



@else

{{ Form::open(['route'=>'follows_path']) }}


{{ Form::hidden('userIdToFollow', $user->id) }}
<button type="submit" class="btn btn-primary">Follow {{$user->username}}</button>

{{ Form:: Close()}}

@endif

@else
<p>Please sign in</p>


@endif


