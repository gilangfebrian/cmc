<header >
	<nav class="navbar navbar-fixed-top social-navbar top" role="navigation">

	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <a class="navbar-brand" href="index">
	    	<img src="{{asset('assets/img/sample/logo-app.jpg')}}" alt="">
	    	<span>CMC : Training Tools</span>
	    </a>
	  </div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right nav-indicators">
				<li class="dropdown nav-notifications">
				</li>

				<li class="dropdown nav-notifications">
				 	<a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope icon"></i>
						<span class="label  theme brand-1 brand-inverse">3</span>
					</a>
					<ul class="dropdown-menu reveal">
						<li class="nav-notifications-header">
							You have <strong>3</strong> messages
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									Training of Trainers SAKTI
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									End User Training SAKTI
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						 <li class="notif-body">
							<a href="dashboard.html#">
								<img src="{{asset('assets/img/sample/avatar.png')}}" width="25px" alt="" class="avatar img-circle">
								<p class="notif-message">
									Training of Trainers Kuasa BUN SAKTI
									<abbr>Just Now</abbr>
								</p>
							</a>
						</li>
						<li class="nav-notifications-footer">
							<a tabindex="-1" href="dashboard.html#">Download Manual</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="dashboard.html#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('assets/img/sample/avatar.png')}}" width="30px" alt="" class="avatar img-circle">
						<i class="icon-caret-down"></i>
					</a>
					<ul class="dropdown-menu reveal" style="width:200px">
						<li><a href="{{ URL('logout')}}"><i class="icon-off"></i>Log Out</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</nav>
</header>
