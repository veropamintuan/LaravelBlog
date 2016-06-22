@extends('layouts.main')
@section('title')
   Create New Post
@endsection
@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('layouts.content')

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Create New Post</h1>
          <hr>

        	{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
    			{{Form::label('title','Title')}}
    			{{Form::text('title',null,array('class' => 'form-control','required' => '',  
            'maxlength'=> "255"))}}
    			<!--'class' => 'form-control'HERE IT CALLS THE CLASS FORM CONTROL IN BOOTSTRAP-->
			 	
  			 	{{Form::label('body','Content')}}
  				{{Form::textarea('body',null,array('class' =>'form-control','required' => ''))}}
  				
  				{{Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

			{!! Form::close() !!}
        </div>
      </div>

@endsection
@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
@endsection