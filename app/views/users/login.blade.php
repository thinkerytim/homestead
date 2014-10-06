@extends('layouts.default')

@section('content')
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
    <h2 class="form-signup-heading">Please Login</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::openGroup('email', 'Email') }}
        {{ Form::text('email', null, array('placeholder'=>'Email Address')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('password', 'Password') }}
        {{ Form::password('password', array('placeholder'=>'Password')) }}
    {{ Form::closeGroup() }}
 
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop