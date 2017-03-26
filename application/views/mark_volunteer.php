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
      <?php echo $this->session->flashdata('verify_message');
       $user=$this->session->userdata('user');?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url();?>index.php/loadtemplate/" class="logo">
                Marketing
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                                                <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-power-off"></i>
                                <span>Log Out <i class="caret"></i></span>
                            </a>
                           
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
                                    <a href="<?php echo base_url();?>index.php/loadtemplate/">
                                        <i class="fa fa-dashboard"></i> <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/marketing/companylist_vol/">
                                        <i class="fa fa-globe"></i> <span>Company list</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/loadtemplate/loadcompanylist">
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
                                                  <h4 class="modal-title">Company Details</h4>
                                              </div>
                                              <div class="modal-body">

                                                  <form role="form" action="<?php echo base_url();?>index.php/marketing/company_reg/" method="post">

                                                  <div class="form-group">
                                                          <label>Company Name</label>
                                                          <input type="text" class="form-control" name="Name" id="name" placeholder="Enter Company">
                                                          <span class="text-danger"><?php echo form_error('Name');?></span>
                                                          
                                                      </div> 
                                                      <div class="form-group">
                                                          <label>Region</label>
                                                          <input type="text" class="form-control" name="Region" id="name" placeholder="Enter Region">
                                                           <span class="text-danger"><?php echo form_error('Region');?></span>
                                                          
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
                                 $task=$this->session->userdata('task');
                                 
                                 foreach($task as $obj1): ?>
                                      <li>
                                          
                                          <div class="task-title">
                                              <span class="task-title-sp"><?php echo $obj1->action.' - '.$obj1->region; ?></span>
                                              <?php if ($obj1->done!=0) {
                                            
                                                
                                                 echo '<span class="label label-success">Completed</span>';

                                              }
                                              else{
                                                echo '<span class="label label-danger">To do</span>';?>
                                                 <a href="<?php echo base_url();?>index.php/marketing/setdone/<?php echo $obj1->tid?>/<?php echo $user?>">done</a>
                                              <?php }

                                                ?>
                                                <a href=""></a>
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
                                  <!--<button class="btn btn-primary btn-addon btn-sm" data-toggle="modal" data-target="#newteam">
                                        <i class="fa fa-plus"></i>
                                        Add Tasks
                                    </button>

                                             <div id="newteam" class="modal fade in" role="dialog">
                                                <div class="modal-dialog">
            
                                             Modal content
                                            <div class="modal-content row">
                                                <div class="modal-header custom-modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                    <h4 class="modal-title">Task Details</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="info_form" class="form-inline" action="<?php echo base_url();?>index.php/loadtemplate/addtask" method="post">

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
                              </div>-->
                          </div>
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
              
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