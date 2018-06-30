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

    <!-- Colorpicker Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

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
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
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
                            <li>
                                <a href="<?php echo base_url(); ?>assets/admin/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li class="active">
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
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
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
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="bdate" placeholder="Birthdate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="demo-masked-input">
                                <div class="col-sm-6">
                                    <p><b>SEX</b></p>
                                    <div class="input-group">
                                        <div class="form">
                                            <select class="form-control show-tick" title="Choose">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p><b>OFFICE</b></p>
                                    <div class="input-group">
                                        <div class="form">
                                            <select class="form-control show-tick" data-live-search="true" title="Choose">
                                                <option value="College of Engineering">College of Engineering</option>
                                                <option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
                                                <option value="College of Science">College of Science</option>
                                                <option value="College of Liberal Arts">College of Liberal Arts</option>
                                                <option value="College of Industrial Education">College of Industrial Education</option>
                                                <option value="College of Industrial Technology">College of Industrial Technology</option>
                                                <option value="Research and Extension">Research and Extension</option>
                                                <option value="Integrated Research and Training Center">Integrated Research and Training Center</option>
                                                <option value="TUP Cavite">TUP Cavite</option>
                                                <option value="TUP Taguig">TUP Taguig</option>
                                                <option value="TUP Visayas">TUP Visayas</option>
                                            </select>
                                        </div>
                                    </div>
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

    <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>

</html>