@extends('layouts.nomenu')

@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <div class="form-group m-bottom-md">
        <input name="firstname" type="text" class="form-control" placeholder="First Name" value="{{ Input::old('firstname') }}" >
    </div>
    <div class="form-group m-bottom-md">
        <input name="lastname" type="text" class="form-control" placeholder="Last Name" value="{{ Input::old('lastname') }}" >
    </div>
    <div class="form-group m-bottom-md">
        <input name="email" type="text" class="form-control" placeholder="Email Address" value="{{ Input::old('email') }}" >
    </div>
    <div class="form-group m-bottom-md">
        <input name="company" type="text" class="form-control" placeholder="Company" value="{{ Input::old('company') }}" >
    </div>
    <div class="form-group m-bottom-md">
        <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ Input::old('phone') }}" >
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <div class="custom-checkbox">
            <input name="agreement" type="checkbox" id="chkAccept">
            <label for="chkAccept"></label>
        </div>
        I accept the <a href="{{ route('tos', array()) }}" target="_blank">terms and conditions</a>.
    </div>

    <div class="form-group">
        {{ Form::captcha() }}
    </div>

    <div class="m-top-md p-top-sm">
        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-success block">Create an account</a>
    </div>

    <div class="m-top-md p-top-sm">
        <div class="font-12 text-center m-bottom-xs">Already have an account?</div>
        <a href="{{ action('UsersController@getLogin', array()) }}" class="btn btn-default block">Sign In</a>
    </div>
{{ Form::close() }}
@stop
