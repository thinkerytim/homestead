@extends('layouts.default')

@section('content')

<form action="{{ action('RemindersController@postReset') }}" method="POST">
	<h2 class="form-signup-heading">Password reminder</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="submit" value="Reset Password">
</form>
@stop