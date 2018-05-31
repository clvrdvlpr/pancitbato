<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Research Intelligent Application</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/tuplogo.png" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.search.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />


</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Loading</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Search">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo base_url(); ?>assets/admin/javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="<?php echo base_url(); ?>assets/admin/javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>assets/admin/index.html">RESEARCH INTELLIGENT APPLICATION</a>
            </div>
            <!-- <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="http://localhost/ria/resmain/homepage">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/ria/resmain/profile">
                            <i class="material-icons">account_circle</i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/ria/resmain/restab">
                            <i class="material-icons">assignment</i>
                            <span>Research</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);">Clever Designs</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div id="searchhead" class="header">
                                <form action="" method="POST">
                                    <div class="row clearfix"> 
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input id="searchval" name="searchval" type="text" class="form-control" placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <button id="searchbtn" type="button" class="btn btn-block btn-primary waves-effect">
                                                    <i class="material-icons">search</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="list-unstyled">
                                        <li><b>Searched for: </b></li>
                                    </ul> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <section id="dashboard">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>BULLETIN</h2>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ol>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ol>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>NEW PROJECTS 2018</h2>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                <?php 
                                    if(isset($joindata)) {
                                        foreach ($joindata as $ts) {
                                            $date = date('Y');
                                            if($ts['status_year'] <= $date){
                                                echo'
                                                <li><b>'.$ts['proposal_id'].'</b>'." : ".''.$ts['p_title'].'</li>
                                                ';
                                            }
                                        }
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            
            <div id="searchresults" class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Research Proposals</h2>
                        </div>
                        <div class="body" id="researchproposals">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="row clearfix demo-icon-container">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <div class="demo-google-material-icon"> 
                                                <i class="material-icons">search</i> <span id="psearchnum" class="icon-name"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <div id="loader" class="loader align-center">
                                        <div class="preloader">
                                            <div class="spinner-layer pl-red">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Loading</p>
                                </div> -->
                                <li id="propresultbodyno"></li>
                                <li id="propresultbody"></li>
                                <!-- <a href="http://localhost/ria/resmain/"></a> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Researchers</h2>
                        </div>
                        <div class="body" id="researchers">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="row clearfix demo-icon-container">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <div class="demo-google-material-icon"> 
                                                <i class="material-icons">search</i> <span class="icon-name">records found!</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ol>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ol>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/propid.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
</body>

</html>