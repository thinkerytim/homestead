<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ThinkClosing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        {{ HTML::style("assets/bootstrap/css/bootstrap.min.css") }}
        
        <!-- Font Awesome -->
        {{ HTML::style("css/font-awesome.css") }}

        <!-- ionicons -->
        {{ HTML::style("css/ionicons.min.css") }}
        
        <!-- Simplify -->
        {{ HTML::style("css/simplify.min.css") }}
    
    </head>

    <body class="overflow-hidden light-background">
        <div class="wrapper no-navigation preload">
            <div class="sign-in-wrapper">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="sign-in-inner">
                    <div class="login-brand text-center">
                        <i class="fa fa-lightbulb-o m-right-xs"></i> Think<strong class="text-skin">Closing</strong>
                    </div>
                    {{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
                        <div class="form-group m-bottom-md">
                            <input name="email" type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="chkRemember">
                                <label for="chkRemember"></label>
                            </div>
                            Remember me
                        </div>

                        <div class="m-top-md p-top-sm">
                            {{ Form::submit('Sign in', array('class'=>'btn btn-success block'))}}
                        </div>

                        <div class="m-top-md p-top-sm">
                            <div class="font-12 text-center m-bottom-xs">
                                <a href="#" class="font-12">Forgot password ?</a>
                            </div>
                            <div class="font-12 text-center m-bottom-xs">Do not have an account?</div>
                            <a href="{{ action('UsersController@getRegister', array()) }}" class="btn btn-default block">Create an account</a>
                        </div>
                    {{ Form::close() }}
                </div><!-- ./sign-in-inner -->
            </div><!-- ./sign-in-wrapper -->
        </div><!-- /wrapper -->

        <a href="" id="scroll-to-top" class="hidden-print"><i class="icon-chevron-up"></i></a>

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
        <!-- Jquery -->
        {{ HTML::script("assets/javascript/jquery-1.11.1.min.js") }}

        <!-- Bootstrap -->
        {{ HTML::script("assets/bootstrap/js/bootstrap.min.js") }}
        
        <!-- Slimscroll -->\
        {{ HTML::script("assets/javascript/jquery.slimscroll.min.js") }}
        
        <!-- Popup Overlay -->
        {{ HTML::script("assets/javascript/jquery.popupoverlay.min.js") }}

        <!-- Modernizr -->
        {{ HTML::script("assets/javascript/modernizr.min.js") }}
        
        <!-- Simplify -->
        {{ HTML::script("assets/javascript/simplify/simplify.js") }}
    
    </body>
</html>
