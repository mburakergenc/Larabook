<!--navigasyon tagi aciyoruz "nav" tag aciyoruz. -->
<!--class bootstrap uzerinden navigasyonu cagiriyor -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
<!--navigasyon icerigi -->
  <div class="container">
  <!--nagigasyon basligi. Sol kisim -->
     <div class="navbar-header">
    <!-- larabook yazisi -->
        <a class="navbar-brand" href="{{Auth::check() ? route('status_path') : route('home')}}">Larabook</a>

        </div>

         <!-- Login olduktan solda cikan navigasyon elementi -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
           @if($currentUser)
           <!-- browse users butonu -->
                <li class="active">{{link_to_route('users_path','Browse Users')}}</li>

                 @endif
              </ul>
            <!-- sagdaki navigasyon -->
               <ul class="nav navbar-nav navbar-right">
                @if($currentUser)
                              <li class="dropdown">
            <!-- Sagdaki username butonun acilip kapanmasi -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 <!-- user profil resmi-->
                                <img class="nav-gravatar" src="{{$currentUser->gravatarLink()}}" alt="{{$currentUser->username}}"
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $currentUser->username }} <span class="caret"></span></a>
                                </a>

     <!-- Menu icerigi -->
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">{{ link_to_route('profile_path','Your Profile',$currentUser->username) }}</a></li>
                                 <li>
                                 <a href="{{ URL::to('password/remind') }}">
                                     <i class="icon-dashboard"></i>
                                     <span class="menu-text"> Reset Password </span>
                                 </a>
                                 </li>
                                  <li class="divider"></li>

    <!-- Log out yazisi -->
                                  <li>{{link_to_route('logout_path','Log Out')}}</li>
                                </ul>
                              </li>
                              @else
                                    <!-- Register yazisi -->
                              <li>{{ link_to_route('register_path', 'Register') }} </li>

                              <li>{{ link_to_route('login_path', 'Log In') }} </li>
                              @endif
                            </ul>

  </div>
  </div>
</nav>