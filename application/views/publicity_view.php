<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Excello</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="S Meena Padnekar">
    <meta name="keywords" content="Placement Cell, Mec,PC">
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url('assets/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url('assets/css/morris/morris.css');?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo base_url('assets/css/jvectormap/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets/css/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="<?php echo base_url('assets/css/fullcalendar/fullcalendar.css');?>" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="<?php echo base_url('assets/css/daterangepicker/daterangepicker-bs3.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url('assets/css/iCheck/all.css');?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/regstyle.css');?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">
      <?php echo $this->session->flashdata('verify_message');?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url();?>index.php/copy/" class="logo">
               Head(Publicity)
               </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Director Design Team

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 2 hours</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> Today</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers

                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                                <small class="pull-right"><i class="fa fa-clock-o"></i> 2 days</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li>
                                    <a href="#">
                                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge badge-success pull-right">10</span> Updates</a>
                                    <a href="#">
                                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge badge-danger pull-right">5</span> Messages</a>
                                    <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> Subscriptions</a>
                                    <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                        "badge pull-right">11</span> FAQ</a>
                                </li>

                                <li class="divider"></li>

                                    <li>
                                        <a href="#">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a data-toggle="modal" href="#modal-user-settings">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="img/26115.jpg" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p>Hello, Jane</p>

                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/copy/">
                                        <i class="fa fa-dashboard"></i> <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/copy/loadcompanylist">
                                        <i class="fa fa-globe"></i> <span>Institute list</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/copy/editcompanylist">
                                        <i class="fa fa-globe"></i> <span>Edit</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#myModal" data-toggle="modal" class="">
                                        <i class="fa fa-wrench"></i> <span>Add New</span>
                                    </a>
                                </li>
                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                  <h4 class="modal-title">Institute Details</h4>
                                              </div>
                                              <div class="modal-body">

                                                  <form role="form" action="<?php echo base_url();?>index.php/copy/company_reg/" method="post">

                                                  <div class="form-group">
                                                          <label>Institution Name</label>
                                                          <input type="text" class="form-control" name="Name" id="name" placeholder="Enter Institute">
                                                          <span class="text-danger"><?php echo form_error('Name');?></span>
                                                          
                                                      </div> 
                                                      <div class="form-group">
                                                          <label>Region</label>
                                                          <input type="text" class="form-control" name="Region" id="name" placeholder="Enter Region">
                                                           <span class="text-danger"><?php echo form_error('Region');?></span>
                                                          
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Event</label>
                                                          <input type="text" class="form-control" name="Event" id="name" placeholder="Enter Event">
                                                           
                                                          
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Contact Details</label>
                                                          <input type="text" class="form-control" name="Address" id="name" placeholder="Enter address and contact no">
                                                           <span class="text-danger"><?php echo form_error('Address');?></span>
                                                          
                                                      </div>
                                                      <div class="form-group">
                                                          <label>Email address</label>
                                                          <input type="email" class="form-control" name="Email" id="email" placeholder="Enter email">
                                                           <span class="text-danger"><?php echo form_error('Email');?></span>
                                                      </div>
                                                    
                                                     
                                                      <button type="submit" class="btn btn-default">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                            

                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">
                    </div>

                    <!-- Main row -->
                   <!-- <div class="row">

                        <div class="col-md-8">
                            earning graph start
                            <section class="panel">
                                <header class="panel-heading">
                                    Earning Graph
                                </header>
                                <div class="panel-body">
                                    <canvas id="linechart" width="600" height="330"></canvas>
                                </div>
                                        </section>
                                        earning graph end

                                    </div>
                                    <div class="col-lg-4">

                                        chat start
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Notifications
                                            </header>
                                                <div class="panel-body" id="noti-box">

                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                                    </div>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Well done!</strong> You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                    </div>


                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                                    </div>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Well done!</strong> You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                    </div>



                                                </div>
                                        </section>



                      </div>


                  </div>-->
                  <!--  <div class="row">

                        <div class="col-md-8">
                            <section class="panel">
                              <header class="panel-heading">
                                  Work Progress
                            </header>
                            <div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Project</th>
                                      <th>Manager</th>
                                       <th>Client</th> 
                                      <th>Deadline</th>
                                      <th>Price</th> 
                                      <th>Status</th>
                                      <th>Progress</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Facebook</td>
                                  <td>Mark</td>
                                  <td>Steve</td> 
                                  <td>10/10/2014</td>
                                  <td>$1500</td> 
                                  <td><span class="label label-danger">in progress</span></td>
                                  <td><span class="badge badge-info">50%</span></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Twitter</td>
                                  <td>Evan</td>
                                   <td>Darren</td> 
                                  <td>10/8/2014</td>
                                   <td>$1500</td> 
                                  <td><span class="label label-success">completed</span></td>
                                  <td><span class="badge badge-success">100%</span></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Google</td>
                                  <td>Larry</td>
                                   <td>Nick</td> 
                                  <td>10/12/2014</td>
                                  <td>$2000</td> 
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-warning">75%</span></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>LinkedIn</td>
                                  <td>Allen</td>
                                   <td>Rock</td> 
                                  <td>10/01/2015</td>
                                  <td>$2000</td> 
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-info">65%</span></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Tumblr</td>
                                  <td>David</td>
                                  <td>HHH</td> 
                                  <td>01/11/2014</td>
                                   <td>$2000</td> 
                                  <td><span class="label label-warning">in progress</span></td>
                                  <td><span class="badge badge-danger">95%</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Tesla</td>
                                  <td>Musk</td>
                                   <td>HHH</td> 
                                  <td>01/11/2014</td>
                                   <td>$2000</td> 
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>Ghost</td>
                                  <td>XXX</td>
                                  <td>HHH</td> 
                                  <td>01/11/2014</td>
                                  <td>$2000</td> 
                                  <td><span class="label label-info">in progress</span></td>
                                  <td><span class="badge badge-success">95%</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </section>


          </div>--> <!--end col-6 -->
          <!--<div class="col-md-4">
            <section class="panel">
                <header class="panel-heading">
                    Twitter Feed
                </header>
                <div class="panel-body">
                    <div class="twt-area">
                        <form action="#" method="post">
                            <textarea class="form-control" name="profile-tweet" placeholder="Share something on Twitter.." rows="3"></textarea>

                            <div class="clearfix">
                                <button class="btn btn-sm btn-primary pull-right" type="submit">
                                    <i class="fa fa-twitter"></i>
                                    Tweet
                                </button>
                                <a class="btn btn-link btn-icon fa fa-location-arrow" data-original-title="Add Location" data-placement="bottom" data-toggle="tooltip" href=
                                "#" style="text-decoration:none;" title=""></a>
                                <a class="btn btn-link btn-icon fa fa-camera" data-original-title="Add Photo" data-placement="bottom" data-toggle="tooltip" href="#"
                                style="text-decoration:none;" title=""></a>
                            </div>
                        </form>
                    </div>
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                                <a href="page_ready_user_profile.php">
                                    <strong>John Doe</strong>
                                </a>
                                <p>
                                    In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                                    <a href="#" class="text-danger">
                                        <strong>#dev</strong>
                                    </a>
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                                <a href="page_ready_user_profile.php">
                                    <strong>John Doe</strong>
                                </a>
                                <p>
                                    In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                                    <a href="#" class="text-danger">
                                        <strong>#design</strong>
                                    </a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>-->

                   <!-- </div>-->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel">
                                <header class="panel-heading">
                                    Teammates
                                </header>

                                <ul class="list-group teammates">
                                 <?php 
                                 //$this->company_model->getmembers();      //$result=$data['result'];
                                 $data=$this->session->userdata('users');
                                 
                                 foreach($data as $obj): ?>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                                       <!-- <span class="pull-right label label-danger inline m-t-15"></span>-->
                                        <a href=""><?php echo $obj->username ;?></a>
                                    </li>
                                     <?php endforeach; ?>
                                    <!--<li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-info inline m-t-15">Member</span>
                                        <a href="">Joe Waston</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                        <a href="">Jannie Dvis</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-warning inline m-t-15">Editor</span>
                                        <a href="">Emma Welson</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href=""><img src="img/26115.jpg"  width="50" height="50"></a>
                                        <span class="pull-right label label-success inline m-t-15">Subscriber</span>
                                        <a href="">Emma Welson</a>
                                    </li>-->
                                </ul>
                                <div class="panel-footer bg-white">
                                    <!-- <span class="pull-right badge badge-info">32</span> -->
                                    <button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#myregistration">
                                        <i class="fa fa-plus"></i>
                                        Add Teammate
                                    </button>

                                             <div id="myregistration" class="modal fade in" role="dialog">
                                                <div class="modal-dialog">
            
                                            <!-- Modal content-->
                                            <div class="modal-content row">
                                                <div class="modal-header custom-modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                    <h4 class="modal-title">Member Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="info_form" class="form-inline" action="<?php echo base_url();?>index.php/copy/registration" method="post">

                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="fname" id="name" placeholder="Enter FirstName">
                                                            <span class="text-danger"><?php echo form_error('fname'); ?></span>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="lname" id="name" placeholder="Enter LastName">
                                                            <span class="text-danger"><?php echo form_error('lname'); ?></span>
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="class" id="name" placeholder="Enter Class">
                                                            
                                                            </div>
                                                        
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="region" id="cheeckin" placeholder="Region to Visit">
                                                            
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                                                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="password" class="form-control" name="password" id="cheeckout" placeholder="Set Password">
                                                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                                                            
                                                        </div>
                    
                                                        <div class="form-group col-sm-12">
                                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        </div>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                          <section class="panel tasks-widget">
                              <header class="panel-heading">
                                  Todo list
                            </header>
                            <div class="panel-body">

                              <div class="task-content">

                                  <ul class="task-list">
                                  <?php 
                                 //$this->company_model->getmembers();      //$result=$data['result'];
                                 $task=$this->session->userdata('ptask');
                                 
                                 foreach($task as $obj1): ?>
                                      <li>
                                          <div class="task-checkbox">
                                              <!-- <input type="checkbox" class="list-child" value=""  /> -->
                                              <input type="checkbox" class="flat-grey list-child"/>
                                              <!-- <input type="checkbox" class="square-grey"/> -->
                                          </div>
                                          <div class="task-title">
                                              <span class="task-title-sp"><?php echo $obj1->action.' - '.$obj1->team; ?></span>
                                              <?php if ($obj1->done==1) {
                                            
                                                
                                                 echo '<span class="label label-success">Completed</span>';

                                              }
                                              else{
                                                echo '<span class="label label-danger">To do</span>';
                                              }
                                                ?>

                                              <div class="pull-right hidden-phone">
                                                 <!-- <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                                  <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                                -->
                                              </div>
                                          </div>
                                      </li>
                                  <?php endforeach ;?>
                                      

                                  </ul>
                              </div>

                              <div class=" add-task-row">
                                  <button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#newteam">
                                        <i class="fa fa-plus"></i>
                                        Add Tasks
                                    </button>

                                             <div id="newteam" class="modal fade in" role="dialog">
                                                <div class="modal-dialog">
            
                                            <!-- Modal content-->
                                            <div class="modal-content row">
                                                <div class="modal-header custom-modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                    <h4 class="modal-title">Task Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="info_form" class="form-inline" action="<?php echo base_url();?>index.php/copy/addtask" method="post">

                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="action" id="name" placeholder="Enter duty">
                                                            <span class="text-danger"><?php echo form_error('action'); ?></span>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" class="form-control" name="team" id="name" placeholder="Enter Team Name">
                                                            <span class="text-danger"><?php echo form_error('team'); ?></span>
                                                            </div>
                                                           
                                                        
                    
                                                        <div class="form-group col-sm-12">
                                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        </div>
    
                                  <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy Director, 2014
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js');?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/js/plugins/daterangepicker/daterangepicker.js');?>" type="text/javascript"></script>

        <script src="<?php echo base_url('assets/js/plugins/chart.js');?>" type="text/javascript"></script>

        <!-- datepicker
        <script src="<?php echo base_url('assets/js/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="<?php echo base_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
        <!-- calendar -->
        <script src="<?php echo base_url('assets/js/plugins/fullcalendar/fullcalendar.js');?>" type="text/javascript"></script>

        <!-- Director App -->
        <script src="<?php echo base_url('assets/js/Director/app.js');?>" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/js/Director/dashboard.js');?>" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>

</body>
</html>