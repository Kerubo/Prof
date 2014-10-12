@extends('layouts.master')
@section('content')
<div class="page-header">
<div class="pull-right">
	<div class="btn-group">
		<a href="{{route('members.index')}}" class="btn btn-default">Back</a>
		<a href="{{route('members.edit',,array($profile->id))}}" class="btn btn-success">Edit profile</a>
	</div>
</div>
	<h2>show profile</h2>
</div>
	@foreach ($profile as $Profile)
	<p class="lead">E-mail{{$members->email}}</p>
	<p class="lead">Password{{$members->password}}</p>

	@endforeach
@stop