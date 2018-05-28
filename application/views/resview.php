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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>assets/admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
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
        <div class="container-fluid" id="sectionone">
            <div class="block-header" id="propaddbtn">
                <!-- <a id="addpropbtn" href="http://localhost/ria/resmain/resprop" class="btn btn-primary btn-block waves-effect">
                    <i class="material-icons">add</i>
                    <span>Add Proposal</span>
                </a> -->
                <a id="addpropbtn" class="btn btn-primary btn-block waves-effect">
                    <i class="material-icons">add</i>
                    <span>Add Proposal</span>
                </a>
                <a id="bckpropbtn" class="btn btn-primary btn-block waves-effect">
                    <i class="material-icons">keyboard_return</i>
                    <span>Back</span>
                </a>
            </div>
            <!-- <div class="block-header" id="propbckbtn"> -->
                <!-- <a id="addpropbtn" href="http://localhost/ria/resmain/resprop" class="btn btn-primary btn-block waves-effect">
                    <i class="material-icons">add</i>
                    <span>Add Proposal</span>
                </a> -->
                
            <!-- </div> -->
            <!-- Exportable Table -->
            <div class="row clearfix" id="restable">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
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
                        <div class="body" id="tablebody">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th id="title">Title</th>
                                            <th id="subtitle">Subtitle</th>
                                            <th id="duration">Duration</th>
                                            <th id="type">Type</th>
                                            <th id="budget">Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if(isset($propdata)){
                                        foreach($propdata as $pd){
                                            // $propid = $pd['proposal_id'];

                                            // $title = $pd['p_title'];
                                            // $subtitle = $pd['p_subtitle'];
                                            // $duration = $pd['p_duration'];
                                            // $type = $pd['p_type'];
                                            // $budget = $pd['p_budget_total'];
                                            echo '
                                                <tr>
                                                    <td id="title"><a href="http://localhost/ria/resmain/resviewclick/'.$pd['proposal_id'].'" class="atitle">'.$pd['p_title'].'</a></td>
                                                    <td id="subtitle">'.$pd['p_subtitle'].'</td>
                                                    <td id="duration">'.$pd['p_duration'].'</td>
                                                    <td id="type">'.$pd['p_type'].'</td>
                                                    <td id="budget">'.$pd['p_budget_total'].'</td>
                                                    
                                                </tr>
                                            ';

                                        }
                                    }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        <div class="container-fluid" id="sectiontwo">
                
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
                                    <button id="submitbtn" type="submit" class="btn btn-primary waves-effect">
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/jsmine/prop.js"></script>
</body>

</html>