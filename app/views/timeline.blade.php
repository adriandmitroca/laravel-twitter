@extends('layout.main')

@section('content')
@foreach ($posts as $post)
<div class="panel panel-default">
  <div class="panel-body">
		{{ $post->content }}
  </div>
  <div class="panel-footer text-right">{{ $post->user['username'] }} | {{ $post->created_at }}, <a href="{{ URL::route('post', array($post->id, $post->slug))  }}">#</a></div>
</div>

@endforeach
@stop