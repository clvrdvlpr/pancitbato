<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/favicon.ico" type="image/x-icon">

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
	
	<!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	
	<!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/waitme/waitMe.css" rel="stylesheet" />
	
    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
	
	<!-- Bootstrap Spinner Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
	
	<!-- Dropzone Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/dropzone/dropzone.css" rel="stylesheet">
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
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo base_url(); ?>assets/admin/javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="<?php echo base_url(); ?>assets/admin/javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>assets/admin/index.html">RESEARCH INTELLIGENT APPLICATION</a>
            </div>
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
                        <a href="http://localhost/ria/resmain/">
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
                    <li>
                        <a href="http://localhost/ria/resmain/resfind">
                            <i class="material-icons">search</i>
                            <span>Find</span>
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
        <div class="container-fluid" id="maincont">
				
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PROPOSAL FORM</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <form action="" method="post">
                        <div class="body">
                            <h3 class="card-inside-title">Proposal ID:</h3>
                            <div class="row clearfix">
                                <div class="form-line">
                                    <div class="col-sm-3">
											<select class="form-control show-tick" name="propyear" id="propyearval">
												<option value="" hidden>-- Please select --</option>
												<option value="2019">2019</option>
												<option value="2018">2018</option>
												<option value="2017">2017</option>
												<option value="2016">2016</option>
												<option value="2015">2015</option>
											</select>
									</div>
									<div class="col-sm-1">
										<div class="form-group">
											<div class="form-line disabled">
												<input type="text" class="form-control" name="pid" id="p_id"/>
											</div>
										</div>
									</div>
                                </div>
							</div>
							<h3 class="card-inside-title">Content</h3>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="p_title" />
                                            <label class="form-label">Title</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="p_subtitle" />
                                            <label class="form-label">Subtitle</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="p_description" rows="8" class="form-control no-resize"></textarea>
											<label class="form-label">Description</label>
                                        </div>
                                    </div>
                                </div>
							</div>
							<h3 class="card-inside-title">Duration</h3>
							<div class="row clearfix">
								<div class="col-sm-3">
									<div class="input-group spinner" data-trigger="spinner">
										<div class="form-line">
											<input name="p_duration" type="number" min="1" class="form-control text-center" value="" data-rule="quantity" />
										</div>
									</div>
								</div>
							</div>
							<h3 class="card-inside-title">Proposal Type</h3>
							<div class="row clearfix">
								<div class="col-sm-6">
									<div class="demo-checkbox">
										<input name="p_type" value="Faculty" type="checkbox" id="md_checkbox_39" class="filled-in chk-col-black" />
										<label for="md_checkbox_39">Faculty</label>
									</div>
                                    <div class="demo-checkbox">
                                        <input name="p_type" value="Faculty Led" type="checkbox" id="md_checkbox_40" class="filled-in chk-col-black" />
                                        <label for="md_checkbox_40">Faculty Led</label>
                                    </div>
								</div>
							</div>
							<h3 class="card-inside-title">Total Budget</h3>
                            <div class="row clearfix">
								<div class="col-md-3">
									<div class="input-group">
										<div class="form-line">
											<input name="p_budget_total" type="text" class="form-control money-dollar" placeholder="&#8369; 00.00" />
										</div>
									</div>
								</div>
							</div>
							<h3 class="card-inside-title">Full Paper</h3>
								<div>
                                    <input name="p_file_fullpaper" type="file" />
								</div>
							<h3 class="card-inside-title"> </h3>
							<div class="row clearfix">
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary waves-effect">
										<span>SUBMIT</span>
										<i class="material-icons">send</i>
									</button>
								</div>
							</div>
                    </div>
                </form>
                </div>
            </div>
		</div>
    </section>
    
    <!-- Get Select Value -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/propid.js"></script>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/morrisjs/morris.js"></script>


    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
	
	<!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>
	
	<!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-spinner/js/jquery.spinner.min.js"></script>
	
	<!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/dropzone/dropzone.js"></script>
	
</body>

</html>