<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Boostrap 3 Admin Dashboard</title>
  <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme" />
  <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <!-- <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700'> -->

  <!-- Plugin CSS --> 
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/vendor/plugins/magnific/magnific-popup.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/skin/default_skin/css/theme.css">


  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/admin-tools/admin-forms/css/admin-forms.css">

  
  <!-- Glyphicons Pro CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/glyphicons-pro/glyphicons-pro.css">

  <!-- Icomoon CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/icomoon/icomoon.css">

  <!-- Iconsweets CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/iconsweets/iconsweets.css">

  <!-- Octicons CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/octicons/octicons.css">

  <!-- Stateface CSS(font) -->
  <link rel="stylesheet" type="text/css" href="/Campus/Public/Admin/assets/fonts/stateface/stateface.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/Campus/Public/Admin/assets/img/favicon.ico">

 <style type="text/css">

/* 分页样式*/
.prev{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;

}

.next{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;

}

.num{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-left: 0px
}

.current{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-right: 10px;
    margin-left: 10px;
  
}

.paging a{
     font-size: 18px;

}

.paging{
    margin-left:250px; 
}

 </style>

</head>

<body class="gallery-page">

  <!-- Start: Main -->
  <div id="main">

    <!--Start: Header -->
                                                    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>Absolute</b>Admin
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown menu-merge hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
            <span class="caret caret-tp"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
				<li>
					<div class="navbar-btn btn-group">
	          <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
		          <span class="ad ad-wand"></span>
	          </a>
	        </div>
				</li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="fa fa-bell-o fs14 va-m"></span>
              <span class="badge badge-danger">9</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">  
              <div class="panel mbn">
                  <div class="panel-menu">
                     <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                     <span class="panel-title fw600"> Recent Activity</span>
                     <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                      <ol class="timeline-list">
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added to his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-success">
                            <span class="fa fa-usd"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Apple</a>
                          </div>
                          <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added his store:
                            <a href="#">Ipod</a>
                          </div>
                          <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-system">
                            <span class="fa fa-fire"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Admin</b> created invoice for:
                            <a href="#">Software</a>
                          </div>
                          <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-tags"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Sara</b> Added to his store:
                            <a href="#">Notebook</a>
                          </div>
                          <div class="timeline-date">3:05am</div>
                        </li>
                      </ol>
       
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="ad ad-radio-tower fs14 va-m"></span>
              <span class="badge">5</span>
            </button>
            <div class="dropdown-menu dropdown-persist w375 animated animated-shorter fadeIn" role="menu">  
              <div class="panel mbn">
                  <div class="panel-menu">
                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                      <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                      <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                      <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                    </div>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar pn">
                    <div class="tab-content br-n pn">
                      <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Tyler Durden - 16 hours ago
                            
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment text-system"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Comment
                              <small class="text-muted"></small>
                            </h5> Mike - I loved your article!                            
                          </div>
                          <div class="media-right">
                            <div class="media-response text-right"> Moderate?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-pencil"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-star text-warning"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Review
                              <small class="text-muted"></small>
                            </h5> Sammy Hilton - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Registration
                              <small class="text-muted"></small>
                            </h5> Michael Sober - 7 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Approve?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-remove"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-usd text-alert"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Invoice
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                            
                          </div>
                          <div class="media-right">
                            <div class="media-response single">#518358</div>
                          </div>
                        </div>
                        <div class="media">
                          <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                          <div class="media-body">
                            <h5 class="media-heading">New Order
                              <small class="text-muted"></small>
                            </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                          </div>
                          <div class="media-right">
                            <div class="media-response"> Confirm?</div>
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-check text-success"></i>
                              </button>
                              <button type="button" class="btn btn-default btn-xs light">
                                <i class="fa fa-print"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/3.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/2.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body">
                            <span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons
                              <small> - 12:30am</small>
                            </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                          </div>
                          <div class="media-right">
                            <a href="#">
                              <img class="media-object" alt="64x64" src="assets/img/avatars/1.jpg">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                        <ul class="media-list" role="menu">
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading mv5">Article
                                <small> - 08/16/22</small>
                              </h5>
                              Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                          <li class="media">
                            <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
                            <div class="media-body">
                              <h5 class="media-heading">Article
                                <small class="text-muted">- 08/16/22</small>
                              </h5> Last Updated 36 days ago by
                              <a class="text-system" href="#"> Max </a>
                            </div>
                          </li>
                        </ul>
                        <table class="table table-striped hidden">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Sussy</td>
                            <td>Watcher</td>
                            <td>@thehawk</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
				<li class="dropdown menu-merge">
					<div class="navbar-btn btn-group">
	          <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
		          <span class="flag-xs flag-us"></span>
		          <!-- <span class="caret"></span> -->
	          </button>
	          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-in mr10"></span> Hindu </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
	            </li>
	            <li>
	              <a href="javascript:void(0);">
	                <span class="flag-xs flag-es mr10"></span> Spanish </a>
	            </li>
	          </ul>
	        </div>
				</li>
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="/Campus/Public/Home/adminphoto/<?php echo (session('apic')); ?>" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"><?php echo (session('adminname')); ?></span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w100 " role="menu">
          <!--w250  -->
            <!-- <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li> -->
            <!-- <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-bell"></span> Notifications </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Settings </a>
            </li> -->
            <li class="dropdown-footer">
              <a href="<?php echo ('/Campus/Admin/Index/logout');?>" class="">
              <span class="fa fa-power-off pr5"></span>退出登录</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Menu -->
                                                     <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">首页图片管理</li>
          <li>
            <a href="<?php echo U('Admin/Index/index_gallery');?>">
              <span class="glyphicon glyphicon-picture"></span>
              <span class="sidebar-title">轮播图片管理</span>
              <span class="sidebar-title-tray">
                <!-- <span class="label label-xs bg-primary">New</span> -->
              </span>
            </a>
          </li>
          <!-- <li>
            <a href="../README/index.html">
              <span class=" icon-youtube4"></span>
              <span class="sidebar-title">Documentation</span>
            </a>
          </li>
          <li class="active">
            <a href="dashboard.html">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li> -->

          <li class="sidebar-label pt15">后台数据管理</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="imoon imoon-wand"></span>
              <span class="sidebar-title">主题推荐数据管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <!-- <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span>主题推荐类型</a>
              </li> -->
              <li>
                <a href="<?php echo U('Admin/Recommend/user_recmd');?>">
                  <span class="glyphicons glyphicons-group"></span>用户推荐</a>
              </li>
              <li>
                <a href="<?php echo U('Admin/Recommend/admin_recmd');?>">
                  <span class="glyphicon glyphicon-user"></span>管理员推荐</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicons glyphicons-cars"></span>
              <span class="sidebar-title">结伴同游数据管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <!-- <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span>主题推荐类型</a>
              </li> -->
              <li>
                <a href="<?php echo U('Admin/User/travel');?>">
                  <span class="glyphicons glyphicons-car"></span>结伴同游</a>
              </li>
             
            </ul>
          </li>

          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicons glyphicons-group"></span>
              <span class="sidebar-title">用户管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo U('Admin/User/user_info');?>">
                  <span class="glyphicon glyphicon-edit"></span> 用户资料 </a>
              </li>
              <li>
                <a href="<?php echo U('Admin/User/recmd_collect');?>">
                  <span class="fa fa-star-o"></span>用户收藏（主题推荐）</a>
              </li>
              <li>
                <a href="<?php echo U('Admin/User/travel_collect');?>">
                  <span class="fa fa-star"></span>用户收藏（结伴同游） </a>
              </li>
              <!-- <li>
                <a href="<?php echo U('Admin/User/p_letter');?>">
                  <span class="fa fa-desktop"></span>私信</a>
              </li> -->
             <!--  <li>
                <a href="admin_forms-wizard.html">
                  <span class="fa fa-clipboard"></span> Admin Wizard </a>
              </li> -->
            </ul>
          </li>

        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">


      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="<?php echo U('Admin/Index/index_gallery');?>" style="font-weight: bold;">首页图片管理</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-picture"></span>
              </a>
            </li>
            
            <li class="crumb-trail">轮播图片管理</li>
          </ol>
        </div>
        <div class="topbar-right">
          
         <!--  <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5">
              <i class="fa fa-sign-in fs22 text-primary"></i>
              <span class="badge badge-hero badge-danger">3</span>
            </a>
          </div> -->
        </div>
      </header>
      <!-- End: Topbar -->

      <section id="content" class="table-layout animated fadeIn">

        <div class="tray tray-center">

          <div class="mh15 pv15 br-b br-light">
            <div class="row">
              <div class="col-xs-7">
                <div class="mix-controls ib">
                  <form class="controls" id="select-filters">
                    <!-- We can add an unlimited number of "filter groups" using the following format: -->
                    <div class="btn-group ib mr10">
                      <button type="button" class="btn btn-default hidden-xs">
                        <span class="fa fa-folder"></span>
                      </button>
                      <div class="btn-group">
                        <fieldset>
                          <select id="filter1">
                            <option value="">所有轮播图片</option>
                            <option value=".folder1">置顶图片</option>
                            <option value=".folder2">未置顶图片</option>
                           <!--  <option value=".folder3">Sony Demo</option> -->
                          </select>
                        </fieldset>
                      </div>
                    </div>
                    <!-- <div class="btn-group ib mr10">
                      <button type="button" class="btn btn-default hidden-xs">
                        <span class="fa fa-tag"></span>
                      </button>
                      <div class="btn-group">
                        <fieldset>
                          <select id="filter2">
                            <option value="">All Labels</option>
                            <option value=".label1">Work</option>
                            <option value=".label3">Clients</option>
                            <option value=".label2">Family</option>
                          </select>
                        </fieldset>
                      </div>
                    </div> -->
                  </form>
                </div>

              </div>
              <div class="col-xs-5 text-right">
                <!-- <button type="button" id="mix-reset" class="btn btn-default mr5">Clear Filters</button> -->
                <div class="btn-group">
                  <button type="button" class="btn btn-default to-grid">
                    <span class="fa fa-th"></span>
                  </button>
                  <button type="button" class="btn btn-default to-list">
                    <span class="fa fa-navicon"></span>
                  </button>
                </div>
              </div>
            </div>
            <div class="mix-controls hidden">
              <form class="controls admin-form" id="checkbox-filters">
                <!-- We can add an unlimited number of "filter groups" using the following format: -->

                <fieldset class="">
                  <h4>Cars</h4>

                  <label class="option block mt10">
                    <input type="checkbox" value=".circle">
                    <span class="checkbox"></span>Circle
                  </label>

                </fieldset>

                <button id="mix-reset2">Clear All</button>
              </form>

            </div>
          </div>

          <div id="mix-container">

            <div class="fail-message">
              <span>No items were found matching the selected filters</span>
            </div>
 
            <?php if(is_array($isfirst)): $i = 0; $__LIST__ = $isfirst;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if($vo1["isfirst"] == '1'): ?><div class="mix label1 folder1">
              <div class="panel p6 pbn">
                <div class="of-h">
                  <img src="/Campus/Public/Admin/Uploads/carouselphoto/<?php echo ($vo1["pic"]); ?>" class="img-responsive" title="<?php echo ($vo1["sketch"]); ?>">
                  <div class="row table-layout">
                    <div class="col-xs-8 va-m pln">
                      <h6><?php echo ($vo1["title"]); ?></h6>
                    </div>
                    <div class="col-xs-4 text-right va-m prn">
                      <a href="<?php echo U('cancel',array('id'=>$vo1['id']));?>"><span class="fa fa-level-down fs12 text-muted"  title="取消置顶"></span></a>
                      <a href="<?php echo U('delcarousel',array('id'=>$vo1['id']));?>" onclick="return confirm('你确定要删除吗？')">
                      <span class="fa fa-trash-o fs10 text-muted ml10" title="删除"></span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          <?php else: ?>
            <div class="mix label2 folder2">
              <div class="panel p6 pbn">
                <div class="of-h">
                  <img src="/Campus/Public/Admin/Uploads/carouselphoto/<?php echo ($vo1["pic"]); ?>" class="img-responsive" title="<?php echo ($vo1["sketch"]); ?>">
                  <div class="row table-layout">
                    <div class="col-xs-8 va-m pln">
                      <h6><?php echo ($vo1["title"]); ?></h6>
                    </div>
                    <div class="col-xs-4 text-right va-m prn">
                      <a href="<?php echo U('top',array('id'=>$vo1['id']));?>"><span class="fa fa-level-up fs12 text-muted" title="置顶"></span></a>
                      <a href="<?php echo U('delcarousel',array('id'=>$vo1['id']));?>" onclick="return confirm('你确定要删除吗？')">
                      <span class="fa fa-trash-o fs10 text-muted ml10" title="删除"></span></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
       


           <!--  <div class="mix label3 folder3">
              <div class="panel p6 pbn">
                <div class="of-h">
                  <img src="/Campus/Public/Admin/assets/img/stock/3.jpg" class="img-responsive" title="why_are_locks.jpg">
                  <div class="row table-layout">
                    <div class="col-xs-8 va-m pln">
                      <h6>why_are_locks.jpg</h6>
                    </div>
                    <div class="col-xs-4 text-right va-m prn">
                      <span class="fa fa-eye-slash fs12 text-muted"></span>
                      <span class="fa fa-circle fs10 text-danger ml10"></span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
 -->

           <!--  <div class="mix label2 folder2">
              <div class="panel p6 pbn">
                <div class="of-h">
                  <img src="/Campus/Public/Admin/assets/img/stock/5.jpg" class="img-responsive" title="the-beach.jpg">
                  <div class="row table-layout">
                    <div class="col-xs-8 va-m pln">
                      <h6>the-beach.jpg</h6>
                    </div>
                    <div class="col-xs-4 text-right va-m prn">
                      <span class="fa fa-eye-slash fs12 text-muted"></span>
                      <span class="fa fa-circle fs10 text-system ml10"></span>
                    </div>
                  </div>
                </div>

              </div>
            </div> -->

          

           <!--  <div class="mix label1 folder1">
              <div class="panel p6 pbn">
                <div class="of-h">
                  <img src="/Campus/Public/Admin/assets/img/stock/2.jpg" class="img-responsive" title="yosemite_sun.jpg">
                  <div class="row table-layout">
                    <div class="col-xs-8 va-m pln">
                      <h6>yosemite_sun.jpg</h6>
                    </div>
                    <div class="col-xs-4 text-right va-m prn">
                      <span class="fa fa-eye-slash fs12 text-muted"></span>
                      <span class="fa fa-circle fs10 text-alert ml10"></span>
                    </div>
                  </div>
                </div>

              </div>
            </div> -->

          
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>



          </div>

        </div>

        <aside class="tray tray-right tray320" data-tray-height="match">

          <h4 class="tray-title">上传轮播图片</h4>
          <form action="<?php echo U('Index/do_first_carousel');?>" method="post" enctype="multipart/form-data">

          <!-- Image Upload Field -->
          <div class="fileupload fileupload-new admin-form mt20" data-provides="fileupload">
            <div class="section mb10">
              <label for="title" class="field prepend-icon">
                <input type="text" name="title" id="title" class="event-name gui-input br-light light" placeholder="标题" required>
                <label for="title" class="field-icon">
                  <i class="fa fa-pencil"></i>
                </label>
              </label>
            </div>
            <div class="section mb10">
              <label class="field prepend-icon">
                <textarea class="gui-textarea br-light h-80 bg-light" id="sketch" name="sketch" placeholder="概述" required></textarea>
                <label for="sketch" class="field-icon">
                  <i class="fa fa-comments"></i>
                </label>
        

                <span class="input-footer hidden">
                  <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
              </label>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <span class="button btn-system btn-file btn-block ph5">
                  <span class="fileupload-new">选择文件</span>
                  <span class="fileupload-exists">重新选择</span>
                  <input type="file" name="pic" required >
                </span>
              </div>
              <div class="col-xs-8 pln">
                <label for="name2" class="field prepend-icon">
                  <!-- <input type="text" name="name2" id="name2" class="event-name gui-input br-light bg-light" placeholder="Tags"> -->
                  <select class="form-control" name="isfirst" required >
                     <option>是否置顶</option>
                     <option value="0">否</option>
                     <option value="1">是</option>
                     
                   </select>
                  <label for="name2" class="field-icon">
                    <!-- <i class="fa fa-pencil"></i> -->
                  </label>
                </label>
              </div>
            </div>

            <div class="fileupload-preview thumbnail m5 mt20 mb30">
              <img data-src="holder.js/100%x140" alt="holder">
            </div>

             <input type="submit" class="event-name gui-input br-light bg-light" value="提交">
            </form>

          </div>

          <!-- Labels Menu -->
          <!-- <div class="list-group list-group-links">
            <div class="list-group-header"> Labels </div>
            <a href="#" class="list-group-item">
              Clients
              <span class="badge badge-info">6</span>
            </a>
            <a href="#" class="list-group-item">
              Contractors
              <span class="badge badge-success">8</span>
            </a>
            <a href="#" class="list-group-item">
              Employees
              <span class="badge badge-primary">11</span>
            </a>
            <a href="#" class="list-group-item">
              Suppliers
              <span class="badge badge-system">13</span>
            </a>
          </div> -->

        </aside>

      </section>

    </section>

    

  </div>





<!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->




  <!-- jQuery -->
  <script src="/Campus/Public/Admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="/Campus/Public/Admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Mixitup Plugin -->
  <script src="/Campus/Public/Admin/vendor/plugins/mixitup/jquery.mixitup.min.js"></script>

  <!-- Page Plugins -->
  <script src="/Campus/Public/Admin/vendor/plugins/magnific/jquery.magnific-popup.js"></script>
  <script src="/Campus/Public/Admin/vendor/plugins/fileupload/fileupload.js"></script>
  <script src="/Campus/Public/Admin/vendor/plugins/holder/holder.min.js"></script>

  <!-- Theme Javascript -->
  <script src="/Campus/Public/Admin/assets/js/utility/utility.js"></script>
  <script src="/Campus/Public/Admin/assets/js/demo/demo.js"></script>
  <script src="/Campus/Public/Admin/assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

    // To keep our code clean and modular, all custom functionality will be
    // contained inside a single object literal called "dropdownFilter".
    var dropdownFilter = {

      // Declare any variables we will need as properties of the object
      $filters: null,
      $reset: null,
      groups: [],
      outputArray: [],
      outputString: '',

      // The "init" method will run on document ready and cache any jQuery objects we will need.
      init: function() {
        var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "dropdownFilter" object so that we can share methods and properties between all parts of the object.

        self.$filters = $('#select-filters');
        self.$reset = $('#mix-reset');
        self.$container = $('#mix-container');

        self.$filters.find('fieldset').each(function() {
          self.groups.push({
            $dropdown: $(this).find('select'),
            active: ''
          });
        });

        self.bindHandlers();
      },

      // The "bindHandlers" method will listen for whenever a select is changed. 
      bindHandlers: function() {
        var self = this;

        // Handle select change    
        self.$filters.on('change', 'select', function(e) {
          e.preventDefault();

          self.parseFilters();
        });

        // Handle reset click
        self.$reset.on('click', function(e) {
          e.preventDefault();

          self.$filters.find('select').val('');

          self.parseFilters();
        });
      },

      // The parseFilters method pulls the value of each active select option
      parseFilters: function() {
        var self = this;

        // loop through each filter group and grap the value from each one.
        for (var i = 0, group; group = self.groups[i]; i++) {
          group.active = group.$dropdown.val();
        }

        self.concatenate();
      },

      // The "concatenate" method will crawl through each group, concatenating filters as desired:
      concatenate: function() {
        var self = this;

        self.outputString = ''; // Reset output string

        for (var i = 0, group; group = self.groups[i]; i++) {
          self.outputString += group.active;
        }

        // If the output string is empty, show all rather than none:
        !self.outputString.length && (self.outputString = 'all');

        //console.log(self.outputString); 
        // ^ we can check the console here to take a look at the filter string that is produced

        // Send the output string to MixItUp via the 'filter' method:
        if (self.$container.mixItUp('isLoaded')) {
          self.$container.mixItUp('filter', self.outputString);
        }
      }
    };

    // To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "checkboxFilter".
    var checkboxFilter = {

      // Declare any variables we will need as properties of the object
      $filters: null,
      $reset: null,
      groups: [],
      outputArray: [],
      outputString: '',

      // The "init" method will run on document ready and cache any jQuery objects we will need.
      init: function() {
        var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.

        self.$filters = $('#checkbox-filters');
        self.$reset = $('#mix-reset2');
        self.$container = $('#mix-container');

        self.$filters.find('fieldset').each(function() {
          self.groups.push({
            $inputs: $(this).find('input'),
            active: [],
            tracker: false
          });
        });

        self.bindHandlers();
      },

      // The "bindHandlers" method will listen for whenever a form value changes. 
      bindHandlers: function() {
        var self = this;

        self.$filters.on('change', function() {
          self.parseFilters();
        });

        self.$reset.on('click', function(e) {
          e.preventDefault();
          self.$filters[0].reset();
          self.parseFilters();
        });
      },

      // The parseFilters method checks which filters are active in each group:
      parseFilters: function() {
        var self = this;

        // loop through each filter group and add active filters to arrays
        for (var i = 0, group; group = self.groups[i]; i++) {
          group.active = []; // reset arrays
          group.$inputs.each(function() {
            $(this).is(':checked') && group.active.push(this.value);
          });
          group.active.length && (group.tracker = 0);
        }

        self.concatenate();
      },

      // The "concatenate" method will crawl through each group, concatenating filters as desired:
      concatenate: function() {
        var self = this,
          cache = '',
          crawled = false,
          checkTrackers = function() {
            var done = 0;

            for (var i = 0, group; group = self.groups[i]; i++) {
              (group.tracker === false) && done++;
            }

            return (done < self.groups.length);
          },
          crawl = function() {
            for (var i = 0, group; group = self.groups[i]; i++) {
              group.active[group.tracker] && (cache += group.active[group.tracker]);

              if (i === self.groups.length - 1) {
                self.outputArray.push(cache);
                cache = '';
                updateTrackers();
              }
            }
          },
          updateTrackers = function() {
            for (var i = self.groups.length - 1; i > -1; i--) {
              var group = self.groups[i];

              if (group.active[group.tracker + 1]) {
                group.tracker++;
                break;
              } else if (i > 0) {
                group.tracker && (group.tracker = 0);
              } else {
                crawled = true;
              }
            }
          };

        self.outputArray = []; // reset output array

        do {
          crawl();
        }
        while (!crawled && checkTrackers());

        self.outputString = self.outputArray.join();

        // If the output string is empty, show all rather than none:
        !self.outputString.length && (self.outputString = 'all');

        //console.log(self.outputString); 
        // ^ we can check the console here to take a look at the filter string that is produced

        // Send the output string to MixItUp via the 'filter' method:
        if (self.$container.mixItUp('isLoaded')) {
          self.$container.mixItUp('filter', self.outputString);
        }
      }
    };

    // Init multiselect plugin on filter dropdowns
    $('#filter1').multiselect({
      buttonClass: 'btn btn-default',
    });
    $('#filter2').multiselect({
      buttonClass: 'btn btn-default',
    });

    // Init checkboxFilter code
    checkboxFilter.init();

    // Init dropdownFilter code
    dropdownFilter.init();

    var $container = $('#mix-container'), // mixitup container
      $toList = $('.to-list'), // list view button
      $toGrid = $('.to-grid'); // list view button

    // Instantiate MixItUp
    $container.mixItUp({
      controls: {
        enable: false // we won't be needing these
      },
      animation: {
        duration: 400,
        effects: 'fade translateZ(-360px) stagger(45ms)',
        easing: 'ease'
      },
      callbacks: {
        onMixFail: function() {}
      }
    });

    $toList.on('click', function() {
      if ($container.hasClass('list')) {
        return
      }
      $container.mixItUp('changeLayout', {
        display: 'block',
        containerClass: 'list'
      }, function(state) {
        // callback function
      });
    });
    $toGrid.on('click', function() {
      if ($container.hasClass('grid')) {
        return
      }
      $container.mixItUp('changeLayout', {
        display: 'inline-block',
        containerClass: 'grid'
      }, function(state) {
        // callback function
      });
    });

    // Add Gallery Item to Lightbox
    $('.mix img').magnificPopup({
      type: 'image',
      callbacks: {
        beforeOpen: function(e) {
          // we add a class to body to indicate overlay is active
          // We can use this to alter any elements such as form popups
          // that need a higher z-index to properly display in overlays
          $('body').addClass('mfp-bg-open');

          // Set Magnific Animation
          this.st.mainClass = 'mfp-zoomIn';

          // Inform content container there is an animation
          this.contentContainer.addClass('mfp-with-anim');
        },
        afterClose: function(e) {

          setTimeout(function() {
            $('body').removeClass('mfp-bg-open');
            $(window).trigger('resize');
          }, 1000)

        },
        elementParse: function(item) {
          // Function will fire for each target element
          // "item.el" is a target DOM element (if present)
          // "item.src" is a source that you may modify
          item.src = item.el.attr('src');
        },
      },
      overflowY: 'scroll',
      removalDelay: 200, //delay removal by X to allow out-animation
      prependTo: $('#content_wrapper')
    });

  });
 </script>
  <!-- END: PAGE SCRIPTS -->

 
</body>

</html>