@extends('layout.main')

@section('content')
@if(Auth::check())
	@include('addpost')
@endif

@foreach ($posts as $post)
<div class="panel panel-default">
  <div class="panel-body">
		{{ $post->content }}
  </div>
  <div class="panel-footer text-right"><a href="{{ URL::route('profile', $post->user['username']) }}">{{ $post->user['username'] }}</a> | {{ $post->created_at }}, <a href="{{ URL::route('post', array($post->id, $post->slug))  }}">#</a></div>
</div>

@endforeach
@stop