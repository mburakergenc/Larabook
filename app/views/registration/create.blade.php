@extends('layouts.default')

@section('content')




@include('layouts.partials.errors')


{{ Form::open(['route'=>'register_path']) }}

<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">

			<div class="form-group">
				{{  Form::label('username', 'Username:') }}
                {{  Form::text('username', null, ['class'=> 'form-control']) }}
			</div>
			<div class="form-group">
				{{  Form::label('email', 'Email: ') }}
                {{  Form::text('email', null, ['class'=> 'form-control']) }}
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						{{  Form::label('password', 'Password: ') }}
                        {{  Form::password('password', ['class'=> 'form-control']) }}
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						{{  Form::label('password_confirmation', 'Password Confirmation: ') }}
                        {{  Form::password('password_confirmation', ['class'=> 'form-control']) }}
					</div>
				</div>
			</div>
			<div class="row">




			<hr class="colorgraph">
			<div class="row">
			<div class="col-xs-12 col-md-6">
				{{  Form::submit('Register', ['class'=>'btn btn-primary btn-block btn-lg' ]) }}
				</div>
				<div class="col-xs-12 col-md-6"><a href="/login" class="btn btn-success btn-block btn-lg">Log In</a></div>
			</div>


	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>



		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
{{  Form::close() }}

    </div>
    </div>

@stop


