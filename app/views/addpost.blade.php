<h3 class="page-header">Share your thoughts</h3>


{{ Form::open(array('action' => 'PostController@addPost')) }}
<div class="panel panel-default">
  	<div class="panel-body">
		<div class="form-group">
			{{ Form::textarea('content', '', array('class' => 'form-control', 'style' => 'height: 120px')) }}
		</div>
  	</div>
  	<div class="panel-footer text-right">
		{{ Form::submit('Share', array('class' => 'btn btn-default')) }}
  	</div>
</div>
{{ Form::close() }}