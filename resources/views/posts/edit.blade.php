@extends('layouts.main')
@section('title')
   Edit Post
@endsection
@section('layouts.content')

	<div class="row">
					
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}
		<div class="col-md-8">
			{{Form::label('title','Title:')}}
			{{ Form::text('title', null, ['class' => 'form-control input-lg'])}}
			
			{{Form::label('body','Content:', ['class' => 'form-spacing-top'])}}
			{{ Form::textarea('title', null, ['class' => 'form-control'])}}


		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
				  <dt>Create At: </dt>
				  <dd>{{date('F j y h:ia', strtotime($post->created_at))}}</dd>
				</dl>
			
				<dl class="dl-horizontal">
				  <dt>Last Updates: </dt>
				  <dd>{{date('F j y h:ia', strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!!Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block'))!!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
						
					</div>
				</div>

			</div>
		</div>
		{!! Form::close()!!}
	</div> <!--end of row bro-->
	
  
@endsection
