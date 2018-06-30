<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Research Intelligent Application</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/tuplogo.png" type="image/png">

    <!-- Preloader Icon -->
    <!-- <link href="<?php echo base_url(); ?>assets/images/preloader.gif" type="image/png"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Select -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />



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
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
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
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-10">
                                    <?php if(isset($resclickdata)){
                                            foreach ($resclickdata as $rc) {
                                                echo'<h2>'."PROPOSAL ".''.$rc['proposal_id'].''.": ".''.$rc['p_title'].'</h2>';
                                            }
                                        }
                                                ?>
                                </div>
                                <div class="col-xs-12 col-sm-2 align-right">
                                    <div class="btn-group" role="group">
                                        <button id="editbtn" type="button" class="btn btn-primary waves-effect"><i class="material-icons">mode_edit</i></button>
                                        <button id="deletebtn" type="button" class="btn btn-warning waves-effect"><i class="material-icons">delete</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <section id="initdata">
                                <?php
                                if(isset($resclickdata)){
                                    foreach ($resclickdata as $rc) {
                                        echo '
                                            <h2 class="card-inside-title" id="propid">'."Proposal ID: ".''.$rc['proposal_id'].'</h2>
                                            
                                            <h2 class="card-inside-title">'."Subtitle: ".''.$rc['p_subtitle'].'</h2>

                                            <h2 class="card-inside-title">'."Type: ".''.$rc['p_type'].'</h2>
                                            
                                            <h2 class="card-inside-title">Description:</h2>
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <h5>'.$rc['p_description'].'</h5>
                                                </div>
                                            </div>
                                            <h2 class="card-inside-title">'."Duration: ".''.$rc['p_duration'].'</h2>
                                            
                                            <h2 class="card-inside-title">'."Total Budget: ".''.$rc['p_budget_total'].'</h2>
                                        ';

                                        
                                    }
                                }
                                else{

                                }
                            ?>
                            </section>
                            <section id="editdata">
                                <form id="editform" method="post" action=<?php echo site_url("resmain/editpropdata/");?> accept-charset="utf-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Proposal ID: </h2>
                                        </span>
                                        <div class="form-line">
                                            <!-- <input id="proposal_id" name="proposal_id" type="text" class="form-control" value="" disabled /> -->
                                            <?php echo form_input(['readonly'=>'true','id'=>'proposal_id','name' => 'proposal_id', 'class' => 'form-control', 'value' => set_value('proposal_id', $resclickdata[0]['proposal_id'])]);?>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Subtitle: </h2>
                                        </span>
                                        <div class="form-line">
                                            <!-- <input id="proposal_id" name="proposal_id" type="text" class="form-control" value="" disabled /> -->
                                            <?php echo form_input(['id'=>'psubtitle','name' => 'p_subtitle', 'class' => 'form-control', 'value' => set_value('p_subtitle',$resclickdata[0]['p_subtitle'])]);?>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Type: </h2>
                                        </span>
                                        <?php 
                                            if($resclickdata[0]['p_type'] == "faculty"){
                                                echo '
                                                    <div class="demo-radio-button">
                                                        <input name="p_type" type="radio" id="ptype1" class="with-gap" value="faculty" checked/>
                                                        <label for="ptype1">Faculty</label>
                                                        <input name="p_type" type="radio" id="ptype2" class="with-gap" value="faculty led"/>
                                                        <label for="ptype2">Faculty Led</label>
                                                    </div>
                                                ';
                                            }
                                            elseif($resclickdata[0]['p_type'] == "faculty led") {
                                                echo '
                                                    <div class="demo-radio-button">
                                                        <input name="p_type" type="radio" id="ptype1" class="with-gap" value="faculty" />
                                                        <label for="ptype1">Faculty</label>
                                                        <input name="p_type" type="radio" id="ptype2" class="with-gap" value="faculty led" checked/>
                                                        <label for="ptype2">Faculty Led</label>
                                                    </div>
                                                ';
                                            }
                                            else{
                                                echo '
                                                    <div class="demo-radio-button">
                                                        <input name="p_type" type="radio" id="ptype1" class="with-gap" value="faculty" />
                                                        <label for="ptype1">Faculty</label>
                                                        <input name="p_type" type="radio" id="ptype2" class="with-gap" value="faculty led"/>
                                                        <label for="ptype2">Faculty Led</label>
                                                    </div>
                                                ';
                                            }
                                        ?>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Description: </h2>
                                        </span>
                                        <div class="form-line">
                                            <!-- <input id="proposal_id" name="proposal_id" type="text" class="form-control" value="" disabled /> -->
                                            <?php echo form_input(['id'=>'pdescription','name' => 'p_description', 'class' => 'form-control', 'value' => set_value('p_description',$resclickdata[0]['p_description'])]);?>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Duration: </h2>
                                        </span>
                                        <div class="form-line">
                                            <!-- <input id="proposal_id" name="proposal_id" type="text" class="form-control" value="" disabled /> -->
                                            <?php echo form_input(['id'=>'pduration','name' => 'p_duration', 'class' => 'form-control', 'value' => set_value('p_duration',$resclickdata[0]['p_duration'])]);?>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <h2 class="card-inside-title">Total Budget: </h2>
                                        </span>
                                        <div class="form-line">
                                            <!-- <input id="proposal_id" name="proposal_id" type="text" class="form-control" value="" disabled /> -->
                                            <?php echo form_input(['id'=>'pbudget','name' => 'p_budget_total', 'class' => 'form-control', 'value' => set_value('p_budget_total',$resclickdata[0]['p_budget_total'])]);?>
                                        </div>
                                    </div>
                                    <div class="icon-and-text-button-demo">
                                        <button id="savebtn" type="submit" data-type="cancel" class="btn btn-primary waves-effect">
                                            <i class="material-icons">save</i>
                                            <span>SAVE</span>
                                        </button>
                                    </div>
                                    <!-- <div class="row clearfix js-sweetalert">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <p>A basic message</p>
                                            <button class="btn btn-primary waves-effect" data-type="basic">CLICK ME</button>
                                        </div>
                                    </div> -->
                                    <!-- <input name="prop_id" class = "col-md-6" type ="text" style="display:none" value=""></input><br>
                                    <label>Station ID</label>
                                    <?php //echo form_input(['name' => 'propid', 'class' => 'form-control', 'value' => set_value('prop_id', $record->proposal_id)]);?> -->
                                </form>
                            </section>
                        </div>
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
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/propedit.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/ui/dialogs.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>

</html>