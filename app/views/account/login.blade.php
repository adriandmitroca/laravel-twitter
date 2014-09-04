@extends('layout.main')

@section('content')

	<div class="col-md-offset-4 col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Log in</h3>
		  </div>
		  <div class="panel-body">
		<form role="form" action="{{ URL::route('account-log-in') }}" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address or username</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  {{ Form::token() }}
		  <button type="submit" class="btn btn-default">Log in</button>
		</form>
		  </div>
		</div>
	</div>
@stop