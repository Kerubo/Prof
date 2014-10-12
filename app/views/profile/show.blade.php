@extends('layouts.master')

@section('content')
<div class="page-header">
  <div class="pull-right">
    <div class="btn-group">
      <!-- Back to list of all users -->
      <a href="{{ route('profile.index') }}" class="btn btn-default">Back</a>
      <!-- Link to Edit Profile Page -->
      <a href="{{ route('profile.edit', array($user->id)) }}" class="btn btn-default">Edit Profile</a>
    </div>
  </div>
  <h2>Show Profile</h2>
</div>
<!-- User Details goes here -->
<p class="lead">First Name: {{ $profile->fname }}</p>
<p class="lead">Last Name: {{ $profile->lname }}</p>
<p class="lead">Phone Number: {{ $profile->phone n }}</p>
<p class="lead">Photo Number: {{ $profile->Photo number }}</p>
<p class="lead">Curriculumn Vitae: {{ $profile->curriculumn vitae}}</p>

<p class="lead">Nickname: {{ $profile->nickname }}</p>
@stop
