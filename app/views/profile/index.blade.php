@extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('profiles.index')}}" class="btn btn-default">Back</a>
		<a href="{{route('profiles.edit',,array($profile->id))}}" class="btn btn-success">Edit profile</a>
	</div>
</div>
	<h2>show profile</h2>
</div>
	@foreach ($profile as $Profile)
	<p class="lead">Firstname{{$Profile->ftname}}</td>
	<p class="lead">Lastname{{$Profile->lname}}</p>
	<p class="lead">Phone Number{{$Profile->phone}}</p>
	<p class="lead">Photo {{$Profile->photo}}</p>
	<p class="lead">Curriculumn Vitae{{$Profile->Curriculumn Vitae}}</p>
	<p class="lead">Nickname{{$Profile->nickname}}</td>

	@endforeach
@stop