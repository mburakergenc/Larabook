@extends('layouts.default')

@section('content')

@include('layouts.partials.errors')

<div class="row">
    <div class="col-md-4">
    <div class="media">
    <div class="pull-left">

        <a href="{{ route('profile_path',$user->username) }}">
        <img class="media-object img-circle avatar" src="//www.gravatar.com/avatar/{{ md5($user->email) }}?s=50" alt="{{$currentUser->username}}">
        </a>

    </div>


    <div class="media-body">

    <h1 class="media-heading"> {{ $user->username }}</h1>

    <ul class="list-inline text-muted">
    <li>{{$statusCount = $user->statuses->count() }}{{  str_plural(' Status',$statusCount) }}</li>
    <li>{{ $followerCount = $user->followers()->count() }} {{ str_plural('Follower', $followerCount) }}</li>

    </ul>


    @foreach($user->followers as $follower)

     <a href="{{ route('profile_path',['user'=>$follower->username]) }}">
            <img class="media-object img-circle avatar" src="//www.gravatar.com/avatar/{{ md5($user->email) }}?s=25" alt="{{$currentUser->username}} ">
            </a>

    @endforeach

    </div>
</div>

</div>
    <div class="col-md-6">


        @unless($user->is($currentUser))
         @include('users.partials.follow-form')
         @endunless

    @if($user->is($currentUser))
        @include('statuses.partials.publish-status-form')
    @endif
    @include('statuses.partials.statuses',['statuses' =>$user->statuses])
    </div>
 </div>
    </div>


@stop
