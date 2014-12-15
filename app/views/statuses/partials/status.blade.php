

<article class="media status-media">
<div class="pull-left">

 <a href="{{ route('profile_path',$status->user->username) }}">
<img class="media-object img-circle avatar" src="//www.gravatar.com/avatar/{{ md5($status->user->email) }}" alt="{{$currentUser->username}}" >
</a>
</div>

<div class="media-body">

<h4 class="media-heading"> {{ $status->user->username }}</h4>
<p>{{ $status->created_at->diffForHumans() }}</p>
{{$status->body }}



</div>

</article>
