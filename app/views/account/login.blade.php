@extends('layout.main')

@section('content')

	<div class="col-md-offset-4 col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Log in</h3>
		  </div>
		  <div class="panel-body">
		<form role="form" action="{{ URL::route('account-sign-in') }}" method="post">
		  <div class="form-group">
		    <label for="username">Email address or username</label>
		    <input type="username" class="form-control" id="username" name="username" {{ Input::old('username') ? ' value="' . Input::old('username') . '"' : '' }}>
  			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" {{ Input::old('password') ? ' value="' . Input::old('password') . '"' : '' }}>
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif	
		  </div>
		  <div class="checkbox">
    		<label>
      			<input type="checkbox" name="remember"> Remember me
    		</label>
		  </div>
		  {{ Form::token() }}
		  <button type="submit" class="btn btn-default">Log in</button>
		</form>
		  </div>
		</div>
	</div>
@stop