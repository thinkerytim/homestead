@extends('layouts.default')

@section('content')
<form action="{{ action('RemindersController@postRemind') }}" method="POST">
	<h2 class="form-signup-heading">Password reminder</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form>
@stop