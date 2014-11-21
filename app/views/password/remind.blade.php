@extends('layouts.nomenu')

@section('content')
{{ Form::open(array('action'=>'RemindersController@postRemind', 'class'=>'form-signin')) }}
    <div class="form-group m-bottom-md">
        <input name="email" type="text" class="form-control" placeholder="Email Address">
    </div>

    <div class="m-top-md p-top-sm">
        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-success block">Send Reminder</a>
    </div>

    <div class="m-top-md p-top-sm">
        <div class="font-12 text-center m-bottom-xs">Don't have an account?</div>
        <a href="{{ action('UsersController@getRegister', array()) }}" class="btn btn-default block">Create an account</a>
    </div>
{{ Form::close() }}
@stop