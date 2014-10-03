@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
	<div class="header">
		<h2>Create your profile</h2>
	</div>
	    {{ Form::open(array('route'=>'profile.create')) }}
		<div class="form_group">
		{{Form::label('Firstnames')}}
		{{ Form::text('ftnames', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Lastnames')}}
		{{ Form::text('lnames', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Phone Number')}}
		{{ Form::text('phone number', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Photo Number')}}
		{{ Form::file('country', null ,array('class'=>'form-control')) }}
		</div>
		<div class="form_group">
		{{Form::label('Curriculum Vitae')}}
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