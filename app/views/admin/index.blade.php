@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<div class="row">
		<div class="col-sm-6">
			<div class="page-title">
				Dashboard
			</div>
			<div class="page-sub-header">
				Welcome back, {{ Auth::user()->firstname.' '.Auth::user()->lastname }}
			</div>
		</div>
		<div class="col-sm-6 text-right text-left-sm p-top-sm">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    Select Closing <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu pull-right" role="menu">
				@forelse($closings as $closing)
			    	<li><a href="#">{{$closing->title}}</a></li>
				@empty
					<li><a href="#">No results</a></li>
				@endforelse
			  </ul>
			</div>

			<a class="btn btn-default"><i class="fa fa-cog"></i></a>
		</div>
	</div>

	<div class="row m-top-md">
		<div class="col-lg-3 col-sm-6">
			<div class="statistic-box bg-danger m-bottom-md">
				<div class="statistic-title">
					Upcoming Closings
				</div>

				<div class="statistic-value">
					{{ count($closings) }}
				</div>

				<div class="m-top-md">{{ $past_closings }} in the past 6 months </div>

				<div class="statistic-icon-background">
					<i class="ion-eye"></i>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6">
			<div class="statistic-box bg-info m-bottom-md">
				<div class="statistic-title">
					Upcoming Tasks
				</div>

				<div class="statistic-value">
					{{ $tasks }}
				</div>

				<div class="m-top-md">{{ $overdue_tasks }} Overdue</div>

				<div class="statistic-icon-background">
					<i class="ion-ios7-cart-outline"></i>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6">
			<div class="statistic-box bg-purple m-bottom-md">
				<div class="statistic-title">
					Total Clients
				</div>

				<div class="statistic-value">
					{{ $clients }}
				</div>

				<div class="m-top-md">{{ $agents }} Agents</div>

				<div class="statistic-icon-background">
					<i class="ion-person-add"></i>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-sm-6">
			<div class="statistic-box bg-success m-bottom-md">
				<div class="statistic-title">
					Total Tours
				</div>

				<div class="statistic-value">
					{{ $tours }}
				</div>

				<div class="m-top-md"></div>

				<div class="statistic-icon-background">
					<i class="ion-stats-bars"></i>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="smart-widget widget-dark-blue">
				<div class="smart-widget-header">
					CLOSING TASKS COMPLETED
					<span class="smart-widget-option">
						<span class="refresh-icon-animated">
							<i class="fa fa-circle-o-notch fa-spin"></i>
						</span>
                        <a href="#" class="widget-toggle-hidden-option">
                            <i class="fa fa-cog"></i>
                        </a>
                        <a href="#" class="widget-collapse-option" data-toggle="collapse">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a href="#" class="widget-refresh-option">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a href="#" class="widget-remove-option">
                            <i class="fa fa-times"></i>
                        </a>
                    </span>
				</div>
				<div class="smart-widget-inner">
					<div class="smart-widget-hidden-section">
						<ul class="widget-color-list clearfix">
							<li style="background-color:#20232b;" data-color="widget-dark"></li>
							<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
							<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
							<li style="background-color:#2baab1;" data-color="widget-green"></li>
							<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
							<li style="background-color:#fbc852;" data-color="widget-orange"></li>
							<li style="background-color:#e36159;" data-color="widget-red"></li>
							<li style="background-color:#7266ba;" data-color="widget-purple"></li>
							<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
							<li style="background-color:#fff;" data-color="reset"></li>
						</ul>
					</div>
					<div class="smart-widget-body no-padding">
						<div class="padding-md">
							<div id="totalSalesChart" class="morris-chart" style="height:250px;"></div>
						</div>
						
						<div class="bg-grey">
							<div class="row">
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">999</h3>
									<small class="m-bottom-sm block">Total Visits</small>
								</div>
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">102</h3>
									<small class="m-bottom-sm block">New Visits</small>
								</div>
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">690</h3>
									<small class="m-bottom-sm block">Bounce Rate</small>
								</div>
							</div>
						</div>
					</div>
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div><!-- ./col -->
		<div class="col-lg-6">
			<div class="smart-widget widget-dark-blue">
				<div class="smart-widget-header">
					TOTAL TOUR VIEWS
					<span class="smart-widget-option">
						<span class="refresh-icon-animated">
							<i class="fa fa-circle-o-notch fa-spin"></i>
						</span>
                        <a href="#" class="widget-toggle-hidden-option">
                            <i class="fa fa-cog"></i>
                        </a>
                        <a href="#" class="widget-collapse-option" data-toggle="collapse">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a href="#" class="widget-refresh-option">
                            <i class="fa fa-refresh"></i>
                        </a>
                        <a href="#" class="widget-remove-option">
                            <i class="fa fa-times"></i>
                        </a>
                    </span>
				</div>
				<div class="smart-widget-inner">
					<div class="smart-widget-hidden-section">
						<ul class="widget-color-list clearfix">
							<li style="background-color:#20232b;" data-color="widget-dark"></li>
							<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
							<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
							<li style="background-color:#2baab1;" data-color="widget-green"></li>
							<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
							<li style="background-color:#fbc852;" data-color="widget-orange"></li>
							<li style="background-color:#e36159;" data-color="widget-red"></li>
							<li style="background-color:#7266ba;" data-color="widget-purple"></li>
							<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
							<li style="background-color:#fff;" data-color="reset"></li>
						</ul>
					</div>
					<div class="smart-widget-body no-padding">
						<div class="padding-md">
							<div id="placeholder" style="height:250px;"></div>
						</div>

						<div class="bg-grey">
							<div class="row">
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">3491</h3>
									<small class="m-bottom-sm block">Total Sales</small>
								</div>
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">721</h3>
									<small class="m-bottom-sm block">New Orders</small>
								</div>
								<div class="col-xs-4 text-center">
									<h3 class="m-top-sm">$8103</h3>
									<small class="m-bottom-sm block">Total Earnings</small>
								</div>
							</div>
						</div>
					</div>
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div><!-- ./col -->
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-6">
					<div class="smart-widget">
						<div class="smart-widget-header">
							<i class="fa fa-calendar m-right-xs"></i>Calendar
							<span class="smart-widget-option">
								<span class="refresh-icon-animated">
									<i class="fa fa-circle-o-notch fa-spin"></i>
								</span>
	                            <a href="#" class="widget-toggle-hidden-option">
	                                <i class="fa fa-cog"></i>
	                            </a>
	                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
	                                <i class="fa fa-chevron-up"></i>
	                            </a>
	                            <a href="#" class="widget-refresh-option">
	                                <i class="fa fa-refresh"></i>
	                            </a>
	                            <a href="#" class="widget-remove-option">
	                                <i class="fa fa-times"></i>
	                            </a>
	                        </span>
						</div>
						<div class="smart-widget-inner">
							<div class="smart-widget-hidden-section">
								<ul class="widget-color-list clearfix">
									<li style="background-color:#20232b;" data-color="widget-dark"></li>
									<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
									<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
									<li style="background-color:#2baab1;" data-color="widget-green"></li>
									<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
									<li style="background-color:#fbc852;" data-color="widget-orange"></li>
									<li style="background-color:#e36159;" data-color="widget-red"></li>
									<li style="background-color:#7266ba;" data-color="widget-purple"></li>
									<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
									<li style="background-color:#fff;" data-color="reset"></li>
								</ul>
							</div>
							<div class="smart-widget-body no-padding bg-grey">
								<p id="calendar" class="custom-calendar no-margin full-width"></p>
							</div>
							<ul class="list-group no-border">
							    <li class="list-group-item">
							    	Meeting
							    	<span class="badge badge-success">7:30</span>
							    </li>
							    <li class="list-group-item">
							    	Database Migration
							    	<span class="badge badge-danger">11:15</span>
							    </li>
							</ul>
						</div><!-- ./smart-widget-inner -->
					</div><!-- ./smart-widget -->
				</div><!-- ./col -->
				<div class="col-lg-6">
					<div class="smart-widget widget-purple">
						<div class="smart-widget-header">
							<i class="fa fa-comment"></i> Chat
							<span class="smart-widget-option">
								<span class="refresh-icon-animated">
									<i class="fa fa-circle-o-notch fa-spin"></i>
								</span>
	                            <a href="#" class="widget-toggle-hidden-option">
	                                <i class="fa fa-cog"></i>
	                            </a>
	                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
	                                <i class="fa fa-chevron-up"></i>
	                            </a>
	                            <a href="#" class="widget-refresh-option">
	                                <i class="fa fa-refresh"></i>
	                            </a>
	                            <a href="#" class="widget-remove-option">
	                                <i class="fa fa-times"></i>
	                            </a>
	                        </span>
						</div>
						<div class="smart-widget-inner">
							<div class="smart-widget-hidden-section">
								<ul class="widget-color-list clearfix">
									<li style="background-color:#20232b;" data-color="widget-dark"></li>
									<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
									<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
									<li style="background-color:#2baab1;" data-color="widget-green"></li>
									<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
									<li style="background-color:#fbc852;" data-color="widget-orange"></li>
									<li style="background-color:#e36159;" data-color="widget-red"></li>
									<li style="background-color:#7266ba;" data-color="widget-purple"></li>
									<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
									<li style="background-color:#fff;" data-color="reset"></li>
								</ul>
							</div>
							<div class="smart-widget-body">
								<div id="chatScroll">
									<ul class="chat">
										<li class="left clearfix">
											<span class="chat-img pull-left">
												<img src="images/profile/profile2.jpg" alt="User Avatar">
											</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">John Doe</strong>
													<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												</p>
											</div>
										</li>
										<li class="right clearfix">
											<span class="chat-img pull-right">
												<img src="images/profile/profile3.jpg" alt="User Avatar">
											</span>
											<div class="chat-body clearfix">
											<div class="header">
												<strong class="primary-font">Jane Doe</strong>
												<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
											</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
												</p>
											</div>
										</li>
										<li class="left clearfix">
											<span class="chat-img pull-left">
												<img src="images/profile/profile2.jpg" alt="User Avatar">
											</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">John Doe</strong>
													<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 20 mins ago</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
												</p>
											</div>
										</li>
										<li class="right clearfix">
											<span class="chat-img pull-right">
												<img src="images/profile/profile3.jpg" alt="User Avatar">
											</span>
											<div class="chat-body clearfix">
												<div class="header">
													<strong class="primary-font">Jane Doe</strong>
													<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 25 mins ago</small>
												</div>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="smart-widget-footer">
								<div class="input-group">
									<input id="btn-input" type="text" class="form-control input-sm" placeholder="type your message here...">
									<span class="input-group-btn">
										<button class="btn btn-success btn-sm no-shadow" id="btn-chat">Send</button>
									</span>
								</div><!-- /input-group -->
							</div><!-- ./smart-widget-footer -->
						</div><!-- ./smart-widget-inner -->
					</div><!-- ./smart-widget -->
				</div><!-- ./col -->
			</div><!-- ./row -->

			
		<div class="col-lg-4">
			<div class="smart-widget">
				<div class="smart-widget-header">
					<span class="badge badge-danger pull-right">10</span>
					To Do List
				</div>
				<div class="smart-widget-inner">
					<div class="smart-widget-body clearfix">
						<div class="search-input pull-left">
							<input type="text" class="form-control input-sm">
							<a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
						</div>
						<a class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Add Task</a>
					</div>
					<ul class="list-group to-do-list sortable-list no-border">
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" value="None" id="todo-check1">
								<label for="todo-check1"></label>
							</div>
							SEO Optimisation
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" id="todo-check2">
								<label for="todo-check2"></label>
							</div>
							Unit Testing
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" id="todo-check3">
								<label for="todo-check3"></label>
							</div>
							Mobile Development
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" id="todo-check4">
								<label for="todo-check4"></label>
							</div>
							Database Migration
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" id="todo-check5">
								<label for="todo-check5"></label>
							</div>
							New Frontend Layout 
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
						<li class="list-group-item" draggable="true">
							<div class="custom-checkbox todo-checkbox">
								<input type="checkbox" id="todo-check6">
								<label for="todo-check6"></label>
							</div>
							Bug Fixes 
							<div class="remove-list">
								<i class="ion-close"></i>
							</div>
						</li>
					</ul>
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
			<div class="task-widget">
				<div class="task-widget-body clearfix">
					<div class="pie-chart-wrapper">
						<div class="chart task-pie-chart line-normal" data-percent="73">
							<h1 class="m-top-lg m-bottom-none">73</h1>
							<div>Percent</div>
						</div>
					</div>
					<div class="widget-detail">
						<small class="text-upper text-muted block font-sm">Task Completed</small>
						<h1 class="no-margin">4312</h1>
					</div>
				</div><!-- ./task-widget-body -->
				<div class="task-widget-statatistic">
					<ul class="clearfix">
						<li class="bg-grey border-success">
							<div class="text-muted text-upper font-sm">Remaining</div>
							2311
						</li>
						<li class="bg-grey border-danger">
							<div class="text-muted text-upper font-sm">In Progress</div>
							3212
						</li>
						<li class="bg-grey border-purple">
							<div class="text-muted text-upper font-sm">Budget</div>
							$17.1M
						</li>
					</ul><!-- ./row -->
				</div>
			</div><!-- ./task-widget -->
		</div><!-- ./col -->
	</div><!-- ./row -->
</div><!-- ./padding-md -->
@stop
@section('page_scripts')
	<!-- Flot -->
	{{ HTML::script("assets/javascript/jquery.flot.min.js") }}
	<!-- Simplify -->
	{{ HTML::script("assets/javascript/simplify/simplify_dashboard.js") }}
@stop