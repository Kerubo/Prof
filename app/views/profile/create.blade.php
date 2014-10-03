@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
	<div class="header">
		<h2><small>HEY PHP CLASS 2014</small><br><br>Create your profile</h2>
	</div>
	    {{ Form::open(array('route'=>'profile.store')) }}
		<div class="form_group">
		{{Form::label('Firstnames')}}
		{{ Form::text('ftnames', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{Form::label('Lastnames')}}
		{{ Form::text('lnames', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{Form::label('Phone Number')}}
		{{ Form::text('phone number', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{Form::label('Photo Number')}}
		{{ Form::file('country', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{Form::label('Curriculum Vitae')}}
		{{ Form::file('curriculum', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{Form::label('Nickname')}}
		{{ Form::text('nickname', null ,array('class'=>'form-control')) }}
		</div>
		<br><br><br>
		<div class="form_group">
		{{ Form::submit('create profile',array('class'=>'btn btn-primary')) }}
		</div>
		<div class="form_group">
		{{ Form::close() }}
		</div>
	</div>
@stop