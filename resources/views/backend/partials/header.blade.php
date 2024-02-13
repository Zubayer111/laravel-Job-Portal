<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="navbar-brand-wrapper d-flex justify-content-center">
					<div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
						<a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset("backend") }}/images/logo.svg" alt="logo" /></a>
						<a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset("backend") }}/images/logo-mini.svg" alt="logo" /></a>
						<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
							<span class="mdi mdi-sort-variant"></span>
						</button>
					</div>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
					<ul class="navbar-nav mr-lg-4 w-100">
						<li class="nav-item nav-search d-none d-lg-block w-100">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="search">
										<i class="mdi mdi-magnify"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search" />
							</div>
						</li>
					</ul>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item dropdown me-1">
							
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown"
								<a class="dropdown-item">
									<div class="item-thumbnail">
										<img src="{{ asset("backend") }}/images/faces/face4.jpg" alt="image" class="profile-pic" />
									</div>
									<div class="item-content flex-grow">
										<h6 class="ellipsis font-weight-normal">David Grey</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											The meeting is cancelled
										</p>
									</div>
								</a>
								<a class="dropdown-item">
									<div class="item-thumbnail">
										<img src="{{ asset("backend") }}/images/faces/face2.jpg" alt="image" class="profile-pic" />
									</div>
									<div class="item-content flex-grow">
										<h6 class="ellipsis font-weight-normal">Tim Cook</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											New product launch
										</p>
									</div>
								</a>
								<a class="dropdown-item">
									<div class="item-thumbnail">
										<img src="{{ asset("backend") }}/images/faces/face3.jpg" alt="image" class="profile-pic" />
									</div>
									<div class="item-content flex-grow">
										<h6 class="ellipsis font-weight-normal">Johnson</h6>
										<p class="font-weight-light small-text text-muted mb-0">
											Upcoming board meeting
										</p>
									</div>
								</a>
							</div>
						</li>
						<li class="nav-item nav-profile dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
								<img src="{{ asset("backend") }}/images/faces/face5.jpg" alt="profile" />
								<span class="nav-profile-name">Louis Barnett</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
								
								<a class="dropdown-item">
									<i class="mdi mdi-logout text-primary"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>