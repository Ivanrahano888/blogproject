<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="robots" content="noindex, nofollow">
        <title>Maradjaw | Home</title>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon">		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
    </head>
    <body>
		<!-- Loader -->
		<div id="loader-wrapper">
				<div id="loader">
					<div class="loader-ellips">
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					  <span class="loader-ellips__dot"></span>
					</div>
				</div>
			</div>
		<!-- /Loader -->
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<!-- Header -->
            <div class="header">
				<!-- Logo -->
                <div class="header-left">
                    <a href="index" class="logo">
						<img src="assets/img/maradjaw black.png" width="100" height="60" alt="">
					</a>
                </div>
				<!-- /Logo -->
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				<!-- Header Title -->
                <div class="page-title-box">
                    <h3 class="page-title">Welcome to Maradjaw travel blogs {{ Session::get('name') }}!</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Guest</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="login">Sign in!</a>
							<a class="dropdown-item" href="registration">Register</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html">Sign in!</a>
							<a class="dropdown-item" href="settings.html">Register</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Groups</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.html">Group 1</a></li>
									<li><a href="#">Group 2</a></li>
								</ul>
							</li>
							<li class="submenu">


								<a href="#"><i class="la la-cube"></i> <span> Browse Channels</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chat.html">Vloger's events</a></li>
								</ul>
							</li>



							<li class="menu-title"> 
								<span>Administration</span>
							</li>
							
							<li> 
								<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
							</li>
							<li> 
								<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="profile.html"> Employee Profile </a></li>
									<li><a href="client-profile.html"> Client Profile </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="otp.html"> OTP </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="search.html"> Search </a></li>
									<li><a href="faq.html"> FAQ </a></li>
									<li><a href="terms.html"> Terms </a></li>
									<li><a href="privacy-policy.html"> Privacy Policy </a></li>
									<li><a href="blank-page.html"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
					
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			<!-- Page Wrapper -->
            <div class="page-wrapper">
				<!-- Page Content -->
                <div class="content container-fluid">
					<!-- Content Starts -->
					<div class="card">
						<div class="card-body">
							<!-- <h4 class="card-title">Solid justified</h4> -->
							<ul class="nav nav-tabs nav-tabs-solid nav-justified">
								<li class="nav-item"><a class="nav-link active" href="#">Vlogger</a></li>
								<li class="nav-item"><a class="nav-link" href="#">All </a></li>
								<li class="nav-item"><a class="nav-link" href="#">Saved</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Applied</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Visitied </a></li>
								<li class="nav-item"><a class="nav-link" href="#">Archived </a></li>
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-file-text-o"></i></span>
									<div class="dash-widget-info">
										<h3>110</h3>
										<span>Vlogs</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-clipboard"></i></span>
									<div class="dash-widget-info">
										<h3>40</h3>
										<span>Vlogs</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-retweet"></i></span>
									<div class="dash-widget-info">
										<h3>374</h3>
										<span>Visited</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-floppy-o"></i></span>
									<div class="dash-widget-info">
										<h3>220</h3>
										<span>Saved</span>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<div class="card card-table">
								<div class="card-header">
									<h3 class="card-title mb-0">Vlogs posted</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Vlogs Title</th>
													<th>Category</th>
													<th class="text-center">Vlog Type</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><a href="job-details.html">National Food</a></td>
													<td>Development</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> Full Time
															</a>
														</div>
													</td>
													<td class="text-center">
														<a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td><a href="job-details.html">National Food</a></td>
													<td>Designing</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i> Part Time
															</a>
														</div>
													</td>
													<td class="text-center">
														<a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td><a href="job-details.html">National Food</a></td>
													<td>Catering</td>
													<td class="text-center">
														<div class="action-label">
															<a class="btn btn-white btn-sm btn-rounded" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-danger"></i> Internship
															</a>
														</div>
													</td>
													<td class="text-center">
														<a href="#" class="btn btn-sm btn-info download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>

		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/js/Chart.min.js"></script>
		<script src="assets/js/line-chart.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>

