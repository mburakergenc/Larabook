@extends('layouts.default')

@section('content')

@include('layouts.partials.errors')

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">

              <h4 class="modal-title" id="myModalLabel">Login to LaraBook.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          {{Form::open(['route'=>'login_path'])}}
                              <div class="form-group">
                                {{  Form::label('email', 'Email: ') }}
                                {{  Form::text('email', null, ['class'=> 'form-control', ]) }}
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                {{  Form::label('password', 'Password: ') }}
                                {{  Form::password('password', ['class'=> 'form-control',]) }}
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              {{  Form::submit('Sign In   ', ['class'=>'btn btn-success btn-block']) }}

                              <a href="/password/remind/2" class="btn btn-default btn-block">Help to login</a>
                          {{Form::close()}}
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Share your moments with friends</li>
                          <li><span class="fa fa-check text-success"></span> Be social</li>
                          <li><span class="fa fa-check text-success"></span> Follow celebrities</li>
                          <li><span class="fa fa-check text-success"></span> Find your old friends</li>

                      </ul>

                      <p><a href="/register" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

@stop
