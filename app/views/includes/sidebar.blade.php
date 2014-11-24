<aside class="sidebar-menu fixed">
	<div class="sidebar-inner scrollable-sidebar">
		<div class="main-menu">
			<ul class="accordion">
				<li class="menu-header">
					Main Menu
				</li>
				<li class="bg-palette1 active">
					<a href="index.html">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
							<span class="text m-left-sm">Dashboard</span>
						</span>
						<span class="menu-content-hover block">
							Home
						</span>
					</a>
				</li>
				<li class="bg-palette2">
					<a href="/users/agents">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-group fa-lg"></i></span>
							<span class="text m-left-sm">Agents</span>
						</span>
						<span class="menu-content-hover block">
							Landing
						</span>
					</a>
				</li>
				<li class="bg-palette3">
					<a href="{{ action('ClosingsController@getIndex', array()) }}">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
							<span class="text m-left-sm">Closings</span>
							<span class="submenu-icon"></span>
						</span>
						<span class="menu-content-hover block">
							Form
						</span>
					</a>
				</li>
				<li class="openable bg-palette4">
					<a href="#">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-tags fa-lg"></i></span>
							<span class="text m-left-sm">Tasks</span>
							<span class="submenu-icon"></span>
						</span>
						<span class="menu-content-hover block">
							UI Kits
						</span>
					</a>
				</li>
				<li class="bg-palette1">
					<a href="inbox.html">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-envelope fa-lg"></i></span>
							<span class="text m-left-sm">Messages</span>
							<small class="badge badge-danger badge-square bounceIn animation-delay5 m-left-xs">5</small>
						</span>
						<span class="menu-content-hover block">
							Inboxs
						</span>
					</a>
				</li>
				<li class="bg-palette2">
					<a href="timeline.html">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-calendar fa-lg"></i></span>
							<span class="text m-left-sm">Calendar</span>
							<small class="badge badge-warning badge-square bounceIn animation-delay6 m-left-xs pull-right">7</small>
						</span>
						<span class="menu-content-hover block">
							Timeline
						</span>
					</a>
				</li>
				<li class="menu-header">
					Others
				</li>
				<li class="openable bg-palette3">
					<a href="#">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-gift fa-lg"></i></span>
							<span class="text m-left-sm">Extra Pages</span>
							<span class="submenu-icon"></span>
						</span>
						<span class="menu-content-hover block">
							Pages
						</span>
					</a>
					<ul class="submenu">
						<li><a href="signin.html"><span class="submenu-label">Sign in</span></a></li>
						<li><a href="signup.html"><span class="submenu-label">Sign Up</span></a></li>
						<li><a href="lockscreen.html"><span class="submenu-label">Lock Screen</span></a></li>
						<li><a href="profile.html"><span class="submenu-label">Profile</span></a></li>
						<li><a href="gallery.html"><span class="submenu-label">Gallery</span></a></li>
						<li><a href="blog.html"><span class="submenu-label">Blog</span></a></li>
						<li><a href="single_post.html"><span class="submenu-label">Single Post</span></a></li>
						<li><a href="pricing.html"><span class="submenu-label">Pricing</span></a></li>
						<li><a href="invoice.html"><span class="submenu-label">Invoice</span></a></li>
						<li><a href="error404.html"><span class="submenu-label">Error404</span></a></li>
						<li><a href="blank.html"><span class="submenu-label">Blank</span></a></li>
					</ul>
				</li>
				<li class="openable bg-palette4">
					<a href="#">
						<span class="menu-content block">
							<span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
							<span class="text m-left-sm">Menu Level</span>
							<span class="submenu-icon"></span>
						</span>
						<span class="menu-content-hover block">
							Menu
						</span>
					</a>
					<ul class="submenu">
						<li class="openable">
							<a href="signin.html">
								<span class="submenu-label">menu 2.1</span>
								<small class="badge badge-success badge-square bounceIn animation-delay2 m-left-xs pull-right">3</small>
							</a>
							<ul class="submenu third-level">
								<li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
								<li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
								<li class="openable">
									<a href="#">
										<span class="submenu-label">menu 3.3</span>
										<small class="badge badge-danger badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
									</a>
									<ul class="submenu fourth-level">
										<li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
										<li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#"><span class="submenu-label">menu 2.2</span></a></li>
					</ul>
				</li>
			</ul>
		</div>	
		<div class="sidebar-fix-bottom clearfix">
			<div class="user-dropdown dropup pull-left">
				<a href="#" class="dropdwon-toggle font-18" data-toggle="dropdown"><i class="ion-person-add"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="inbox.html">
							Inbox
							<span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
						</a>
					</li>			  
					<li>
						<a href="#">
							Notification
							<span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
						</a>
					</li>			  
					<li>
						<a href="#" class="sidebarRight-toggle">
							Message
							<span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
						</a>
					</li>			  	  
					<li class="divider"></li>
					<li>
						<a href="#">Setting</a>
					</li>			  	  
				</ul>
			</div>
			<a href="{{ action('UsersController@getLogout', array()) }}" class="pull-right font-18"><i class="ion-log-out"></i></a>
		</div>
	</div><!-- sidebar-inner -->
</aside>