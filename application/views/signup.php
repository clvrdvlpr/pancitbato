<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Basic Form Elements | Bootstrap Based Admin Template - Material Design</title>
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

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="signup-page">
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
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
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
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo base_url(); ?>assets/admin/index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>assets/admin/pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>assets/admin/pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>assets/admin/pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
        <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">TUP<b> RIA</b></a>
                <small>TUP - Research Intelligent Application</small>
            </div>
            <div class="card">
                <div class="body">
                    <form id="sign_up" method="POST">
                        <div class="msg">Add a new member</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">camera_front</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="tupid" placeholder="ID Number" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">card_giftcard</i>
                            </span>
                            <!-- <div class="form-line">
                                <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                            </div> -->
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                            </div>
                        </div>

                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>
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
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>
</html>