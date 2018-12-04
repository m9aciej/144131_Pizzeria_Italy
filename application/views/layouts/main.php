<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pizzeria ITALY</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
        
        

        
        
    </head>
    
    <body class="hold-transition skin-yellow layout-boxed sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Pizzeria ITALY</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Pizzeria ITALY</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"> Witaj, <?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];}else{ echo "Gość, zaloguj się";}
                                     ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <?php if(isset($_SESSION['phone'])) : ?>
                                                <a href="<?= site_url('login/logoutUser') ?>" class="btn btn-default btn-flat">Wyloguj się</a>
                                                <?php else : ?>
                                                    
                                                    <a href="<?= site_url('login/loginUser') ?>" class="btn btn-default btn-flat">zaloguj się</a>
                                                <?php endif; ?>                                           
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAWIGACJA</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Strona główna</span>
                            </a>
                        </li>
                        
                        <?php if (!czyKlient() && !czyAdmin()): ?>
						<li>
                            <a href="<?php echo site_url('produkt') ?>">
                                <i class="fa fa-book"></i> <span>Menu</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (czyKlient()): ?>
						<li>
                            <a href="<?php echo site_url('produkt') ?>">
                                <i class="fa fa-book"></i> <span>Menu</span>
                            </a>
                        </li>
                                                  
                        <?php endif; ?>
                        
                         <?php if (czyKlient()): ?>
						<li>
                            <a href="<?php echo site_url('zamowienia') ?>">
                                <i class="fa fa-book"></i> <span>Twoje zamówienia</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (czyAdmin()): ?>
						<li>
                            <a href="<?php echo site_url('produkt') ?>">
                                <i class="fa fa-book"></i> <span>Menu</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (czyAdmin()): ?>
						<li>
                            <a href="<?php echo site_url('klient') ?>">
                                <i class="fa fa-user"></i> <span>Klienci</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if (czyAdmin()): ?>
						<li>
                            <a href="<?php echo site_url('zamowienie') ?>">
                                <i class="fa fa-book"></i> <span>Zamówienia</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Wykonał: Maciej Szczurek</strong>
            </footer>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    </body>
</html>
