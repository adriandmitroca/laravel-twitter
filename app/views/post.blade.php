@extends('layout.main')

@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    {{ $post->content }}
  </div>
  <div class="panel-footer text-right">{{ $post->user->username . ' | ' . $post->created_at }}</div>
</div>
@stop
