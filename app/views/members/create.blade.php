@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
	<div class="header">
		<h2>Create profile</h2>
	</div>
	    {{ Form::open(array('route'=>'users.create')) }}
		<div class="form_group">
		{{Form::label('Firstnames')}}
		{{ Form::text('firstnames', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Lastnames')}}
		{{ Form::text('lastnames', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Phone')}}
		{{ Form::text('phone', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Image')}}
		{{ Form::file('country', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('C.V')}}
		{{ Form::file('resume', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Nickname')}}
		{{ Form::text('nickname', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{ Form::submit('create profile',array('class'=>'btn btn-primary')) }}
		</div>
		<div class="form_group">
		{{ Form::close() }}
		</div>
	</div>
@stop