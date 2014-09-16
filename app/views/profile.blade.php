@extends('layout.main')

@section('content')
	<div class="profile-head clearfix">
		<img src="{{ URL::to('/') . '/media/avatars/' . $user->avatar }}" class="avatar img-circle pull-left">
		<div class="pull-left">
			<h1>{{ '@' . $user->username }}</h1>
			<p class="lead">{{ $user->desc }}</p>
		</div>
	</div>
	@foreach ($user->posts as $post)
		<div class="panel panel-default">
		  	<div class="panel-body">
		    	{{ $post->content }}
		  	</div>
  		  	<div class="panel-footer text-right">{{ $post->created_at }}, <a href="{{ URL::route('post', array($post->id, $post->slug)) }}">#</a></div>
		</div>
	@endforeach
@stop