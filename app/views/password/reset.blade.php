@extends('layouts.nomenu')

@section('content')
{{ Form::open(array('action'=>'RemindersController@postReset', 'class'=>'form-signin')) }}
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group m-bottom-md">
        <input name="email" type="text" class="form-control" placeholder="Email Address">
    </div>
    <div class="form-group m-bottom-md">
        <input name="password" type="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group m-bottom-md">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Password Confirm">
    </div>

    <div class="m-top-md p-top-sm">
        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-success block">Reset Password</a>
    </div>

    <div class="m-top-md p-top-sm">
        <div class="font-12 text-center m-bottom-xs">Don't have an account?</div>
        <a href="{{ action('UsersController@getRegister', array()) }}" class="btn btn-default block">Create an account</a>
    </div>
{{ Form::close() }}
@stop