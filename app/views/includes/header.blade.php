<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ HTML::linkRoute('home', 'ThinkClosing!', array(), array('class' => 'navbar-brand')) }}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>{{ HTML::link('#', 'About') }}</li>
        <li>{{ HTML::link('#', 'Pricing') }}</li>
        @if(!Auth::check())
            <li>{{ HTML::link('users/register', 'Register') }}</li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(!auth::check())
          <li>{{ HTML::link('users/login', 'Login') }}</li>
        @else
          <li>{{ HTML::link('users/logout', 'Log out') }}</li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- session errors -->
<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif
</div>