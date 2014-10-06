@extends('layouts.default')

@section('content')
{{ Form::open(array('url'=>'clients/add', 'class'=>'form-signin')) }}
    <h2 class="form-signup-heading">Add Client</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::openGroup('first_name', 'First Name') }}
        {{ Form::text('first_name', null, array('placeholder'=>'First Name')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, array('placeholder'=>'Last Name')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('email', 'Email') }}
        {{ Form::text('email', null, array('placeholder'=>'Email')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('mobile_phone', 'Mobile Phone') }}
        {{ Form::text('mobile_phone', null, array('placeholder'=>'Mobile')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('home_phone', 'Home Phone') }}
        {{ Form::text('home_phone', null, array('placeholder'=>'Home')) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('send_email', 'Send Email') }}
        {{ Form::checkbox('send_email', null) }}
    {{ Form::closeGroup() }}
    {{ Form::openGroup('send_sms', 'Send SMS') }}
        {{ Form::checkbox('send_sms', null) }}
    {{ Form::closeGroup() }}
    {{ Form::token() }}
    {{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop