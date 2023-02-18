<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="robots" content="noindex, nofollow">
        <title>Maradjaw | Userdashboard</title>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/bowl-rice-solid-24.png">
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
		<!-- Main Wrapper -->
        <div class="main-wrapper">
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
			<!-- Header -->
            <div class="header">
				<!-- Logo -->
                <div class="header-left">
                    <a href="home" class="logo">
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
                    <h3 class="page-title">Welcome {{$data->name}}!</h3> 
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
							<span>{{$data->name}}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="home">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="home">Logout</a>
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
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.html">Friends</a></li>
									<li><a class="active" href="employee-dashboard.html">User Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="chat.html">Chat</a></li>
									<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="voice-call.html">Voice Call</a></li>
											<li><a href="video-call.html">Video Call</a></li>
											<li><a href="outgoing-call.html">Outgoing Call</a></li>
											<li><a href="incoming-call.html">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="events.html">Calendar</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="inbox.html">Email</a></li>
									<li><a href="file-manager.html">File Manager</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>#</span>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> User</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employees.html">All User</a></li>			
								</ul>
							</li>																			
							<li class="menu-title"> 
								<span>Administration</span>
							</li>
							<li> 
								<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
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
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="welcome-box">
								<div class="welcome-img">
									<img alt="" src="assets/img/profiles/avatar-02.jpg">
								</div>
								<div class="welcome-det">
									<h3></h3>
									<p>Monday, 20 Feb 2023</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-8 col-md-8">
							
						</div>
					</div>

				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
