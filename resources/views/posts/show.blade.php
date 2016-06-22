@extends('layouts.main')
@section('title')
   View Post
@endsection
@section('layouts.content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
  			<p class="lead">{{ $post->body }}</p>
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
						{!!Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block'))!!}
					</div>
					<div class="col-sm-6">
						{!!Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block'))!!}
					</div>
				</div>

			</div>
		</div>
	</div> <!--end of row bro-->
	
  
@endsection
