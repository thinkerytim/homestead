@extends('layouts.default')

@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::openGroup('firstname', 'First Name') }}
        {{ Form::text('firstname', null, array('placeholder'=>'First Name')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('lastname', 'Last Name') }}
        {{ Form::text('lastname', null, array('placeholder'=>'Last Name')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('email', 'Email') }}
        {{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('company', 'Company') }}
        {{ Form::text('company', null, array('placeholder'=>'Company')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('phone', 'Phone') }}
        {{ Form::text('phone', null, array('placeholder'=>'Phone')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('password', 'Password') }}
        {{ Form::password('password', array('placeholder'=>'Password')) }}
        {{ Form::password('password_confirmation', array('placeholder'=>'Confirm Password')) }}
    {{ Form::closeGroup() }}
 
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop