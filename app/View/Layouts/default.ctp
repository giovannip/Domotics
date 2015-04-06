<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Domotics (in Progress)</title>

        <!-- Bootstrap core CSS -->

        <?php echo $this->Html->css('bootstrap'); ?>
        
        <?php echo $this->Html->css('bootstrap'); ?>
        <?php echo $this->Html->css('bootstrap'); ?>
        
          <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />

        
        <!--external css-->
        <?php echo $this->Html->css('../font-awesome/css/font-awesome'); ?>

        <!-- Custom styles for this template -->
        <?php echo $this->Html->css('style'); ?>
        <?php echo $this->Html->css('style-responsive'); ?>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- js placed at the end of the document so the pages load faster -->

        <?php echo $this->Html->script('jquery'); ?>
        <?php echo $this->Html->script('bootstrap.min'); ?>        
        <?php echo $this->Html->script('jquery-ui-1.9.2.custom.min'); ?>
        <?php echo $this->Html->script('jquery.ui.touch-punch.min'); ?>
        <?php echo $this->Html->script('jquery.dcjqaccordion.2.7'); ?>
        <?php echo $this->Html->script('jquery.scrollTo.min'); ?>
        <?php echo $this->Html->script('jquery.nicescroll'); ?>
        
        <!--common script for all pages-->
        <?php echo $this->Html->script('common-scripts'); ?>

        <!--script for this page-->
        <?php echo $this->Html->script('bootstrap-switch'); ?>
        <?php echo $this->Html->script('jquery.tagsinput'); ?>


        
        <?php echo $this->Html->script('bootstrap-inputmask/bootstrap-inputmask.min'); ?>
        <?php echo $this->Html->script('form-component'); ?>

    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.html" class="logo"><b>Domotics</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->

                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="<?php echo $this->Html->url(array("controller" => "users", "action" => "logout")); ?>">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">


                        <li class="mt">
                            <a id="menu-dashboard" href="<?php echo $this->Html->url(array('action' => 'dashboard', 'controller' => 'terminals')); ?>">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a id="menu-terminals" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'terminals')); ?>" >
                                <i class="fa fa-desktop"></i>
                                <span>Terminals</span>
                            </a>
                            <ul class="sub">
                                <li id="menu-terminals-list"><a  href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'terminals')); ?>">List</a></li>
                                <li id="menu-terminals-add"><a  href="<?php echo $this->Html->url(array('action' => 'add', 'controller' => 'terminals')); ?>">Add</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a id="menu-terminalTypes" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'terminalTypes')); ?>" >
                                <i class="fa fa-cogs"></i>
                                <span>Terminal Types</span>
                            </a>
                            <ul class="sub">
                                <li id="menu-terminalTypes-list"><a  href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'terminalTypes')); ?>">List</a></li>
                                <li id="menu-terminalTypes-add"><a  href="<?php echo $this->Html->url(array('action' => 'add', 'controller' => 'terminalTypes')); ?>">Add</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a id="menu-users" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'users')); ?>" >
                                <i class="fa fa-book"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sub">
                                <li id="menu-users-list"><a  href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'users')); ?>">List</a></li>
                                <li id="menu-users-add"><a  href="<?php echo $this->Html->url(array('action' => 'add', 'controller' => 'users')); ?>">Add</a></li>
                            </ul>
                        </li>


                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->

            <?php echo $this->Session->flash('flash', array('element' => 'flash')); ?>

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <?php echo $this->fetch('content'); ?>
                </section>
            </section>

            <!-- /MAIN CONTENT -->


            <?php echo $this->element('sql_dump'); ?>

        </section>

        <script>
            //custom select box

            $(function () {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>
