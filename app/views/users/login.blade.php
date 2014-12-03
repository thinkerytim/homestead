@extends('layouts.nomenu')

@section('content')
{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin', 'id' => 'login-form')) }}
    <div class="form-group m-bottom-md">
        <input name="email" type="text" class="form-control" placeholder="Email Address">
    </div>
    <div class="form-group">
        <input name="password" type="password" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
        <div class="custom-checkbox">
            <input name="remember" type="checkbox" id="chkRemember">
            <label for="chkRemember"></label>
        </div>
        Remember me
    </div>

    <div class="m-top-md p-top-sm">
        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-success block">Sign In</a>
    </div>

    <div class="m-top-md p-top-sm">
        <a href="/login/fb" class="btn block"><i class="fa fa-facebook-square fa-2x"></i> Sign In with Facebook</a>
    </div>

    <div class="m-top-md p-top-sm">
        <div class="font-12 text-center m-bottom-xs">
            <a href="{{ action('UsersController@getReminder', array()) }}" class="font-12">Forgot password?</a>
        </div>
        <div class="font-12 text-center m-bottom-xs">Don't have an account?</div>
        <a href="{{ action('UsersController@getRegister', array()) }}" class="btn btn-default block">Create an account</a>
    </div>
{{ Form::close() }}
@stop

<script type="text/javascript">
    function submitForm(){
        $("#login-form").submit();
    }

    document.onkeydown=function(){
        if(window.event.keyCode=='13'){
            submitForm();
        }
    }
</script>