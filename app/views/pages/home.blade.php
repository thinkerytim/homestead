@extends('layouts.default')
@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-list-alt fa-fw "></i> 
			Widgets
			<span>>
			Smart Widgets
			</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
		<ul id="sparks" class="">
			<li class="sparks-info">
				<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
				<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
					1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
				<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
			<li class="sparks-info">
				<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
				<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
					110,150,300,130,400,240,220,310,220,300, 270, 210
				</div>
			</li>
		</ul>
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		
		<div class="well">
			<button class="close" data-dismiss="alert">
					×
			</button>
			<h1><span class="semi-bold">Smart</span> <i class="ultra-light">Widgets</i> (aka JarvisWidgets) <sup class="badge bg-color-red bounceIn animated">v 2.0</sup> <br>
				<small class="text-danger slideInRight fast animated"><strong>Exclusive to SmartAdmin!</strong></small></h1>
			
			<p>The all new and revolutionary JarvisWidgets v2.0 (<strong>$35 value</strong>) is now only exclusive to SmartAdmin. 
				JarvisWidgets allows you to do more than your normal widgets. You can now use realtime 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="<span class=''>You can load content with ajax. You can even set a 'last updated' timestamp (customizable) a refresh button and set an auto refresh timer.</span>" data-html="true"> 
					AJAX loading </a> in a snap with auto refresh. 
				Add <a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="You can use 5 types of action buttons, toggle, edit, fullscreen, delete and custom button(s) which you can set for a custom action(s). You can even change the order of the action buttons. You can set a custom icon for every button. You can also add your own custom buttons, tabs, progress bars and more."> Infinite </a> buttons and controls to widget header. All widgets are 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widgets are sortable, on tablet and some phones. Dont want sortable widgets on tables/phones, no problem you can remove this."> Sortable</a> across all bootstrap col-spans and uses 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="This plugin gives you the option to let you save a couple of settings for example the position, color and title of the widget.">HTML5 localStorage</a>. Also now supports 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="This plugin is by default ltr, but it has a rtl option.">RTL Support</a>, 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widget works in every modern browser on windows, ios, osx, android, blackberry and windows phone.">Crosbrowser Support</a>, 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widget plugin has a couple of callback function wich you can use for several things, for example, use AJAX to store the data into a database.">Callback functions</a> and 
				<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="To give you more control you can set a lot of options per widget by using a dataset tag which will override the main plugin settings.">More</a>..</p>
			
		</div>
	</div>
</div>	
@stop