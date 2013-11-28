<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <title>Vídeo Cloud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <?php
        foreach ($css as $cssFile) {
            echo '<link rel="stylesheet" href="' . $cssFile . '.css">' . PHP_EOL;
        }
        ?>
        <link href="<?=  base_url('/assets/admin/js/footable/css/footable.core.css?v=2-0-1')?>" rel="stylesheet" type="text/css" />


        <style type="text/css">
            @import url(http://weloveiconfonts.com/api/?family=fontelico);
            /* fontelico */
            [class*="fontelico-"]:before {
                font-family:'fontelico', sans-serif;
            }
            /* entypo */
            [class*="entypo-"]:before {
                font-family:'entypo', sans-serif;
            }
            /* fontawesome */
            [class*="fontawesome-"]:before {
                font-family:'FontAwesome', sans-serif;
            }
            body {
                padding-top: 120px;
                padding-bottom: 0;
            }
            #g1 {
                width:60%;
            }
            #g2 {
                width: 60%;
            }
            #g3 {
                width: 60%;
            }
        </style>


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!-- Fav and touch icons -->

        <link rel="shortcut icon" href="<?= base_url('/assets/admin/ico/minus.png') ?>">
    </head>
    <body>
        <!-- TOP NAVBAR -->
        <div class="navbar navbar-fixed-top navbar-inverse navbar-color">
            <div class="navbar-inner">

                <a class="brand" href="index.html">The<span>Vira</span><i>v1.0</i></a>

                <div class="container-fluid">
                    <a data-target=".navbar-inverse-collapse" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav">
                            <li class="devider-nav-top"></li>
                            <li style="margin-top:8px;margin-right:5px;">
                                <div class="btn-group">
                                    <a class="btn btn-inverse" href="#">
                                        <span class="entypo-user"></span>&#160;<?= $this->session->userdata('username') ?></a>
                                    <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
                                        <span class="entypo-cog"></span>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <a href="#">
                                                <span class="entypo-pencil"></span>&#160;Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="entypo-vcard"></span>&#160;Account</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="entypo-clipboard"></span>&#160;Task</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo base_url('login/logout') ?>">
                                                <span class="entypo-logout"></span>&#160;Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="devider-nav-top"></li>
                        </ul>

                        <ul class="nav pull-right">

                            <li class="devider-nav-top"></li>
                            <li>
                                <div style="margin-top:8px;">
                                    <button class="btn btn-inverse">
                                        <span class="entypo-mail"></span>
                                    </button>
                                    <button class="btn btn-inverse">
                                        <span class="entypo-bell"></span>
                                        <span class="label label-info">Important</span>
                                    </button>

                                    <button class="btn btn-inverse">
                                        <span class="entypo-download"></span>
                                        <span class="badge badge-important">2</span>
                                    </button>
                                </div>

                            </li>

                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->

        </div>
        <!-- /TOP NAVBAR -->
        <!-- breadcrumb -->
        <ul class="breadcrumb">
            <li>
                <a href="#">
                    <span class="entypo-home"></span>&#160;Home</a>
                <span class="divider entypo-right-open-big"></span>
            </li>
            <li><a href="#">Dashboard</a> 
            </li>


            <li class="datepicker-wrap">
                <?= date('l jS \of F Y h:i:s A'); ?>
            </li>
        </ul>
        <!-- /breadcrumb-->



        <!-- SIDE MENU -->
        <div id="skin-select">
            <a id="toggle"></a>
            <form action="#">
                <fieldset>
                    <input type="text" name="search" value="" id="id_search" placeholder="Search Menu" autofocus />
                </fieldset>
            </form>

            <div class="skin-part">
                <div id="tree-wrap" class="nano">
                    <div class="content">
                        <div class="side-bar">

                            <ul id="menu-showhide" class="topnav">
                                <li>
                                    <a class="tooltip-tip" href="<?= base_url('admin/home') ?>" title="Dashboard">
                                        <i class="icon-menu fa fa-laptop fa-lg"></i>
                                        <!--   <img src="assets/img/icons/graphic-design.png" class="" alt=""> -->
                                        <span>Dashboard</span>
                                    </a>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Aluno">
                                        <i class="icon-menu entypo-github"></i>
                                        <span>Aluno</span>
                                    </a>
                                    <ul>
                                        <li class="active">
                                            <a class="tooltip-tip2" href="<?= base_url('admin/aluno/listAluno') ?>" title="Lista"><i class="entypo-doc-text"></i><span>Lista</span></a>
                                        </li>
                                      <!--  <li>
                                            <a class="tooltip-tip2" href="button.html" title="Button"><i class="entypo-keyboard"></i><span>Button</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="accordion.html" title="Tab & Accordion"><i class="entypo-plus-squared"></i><span>Tab & Accordion</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="calender.html" title="Calender"><i class="entypo-calendar"></i><span>Calender</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="gauge.html" title="Gauge"><i class="entypo-gauge"></i><span>Gauge</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="chart.html" title="Chart"><i class="entypo-chart-pie"></i><span>Chart</span></a>
                                        </li>

                                    </ul>
                                </li>
                               <!-- <li>
                                    <a class="tooltip-tip" href="#" title="Form">
                                        <i class="icon-menu fa fa-paste fa-lg"></i>
                                        <span>Form</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a class="tooltip-tip2" href="form-element.html" title="Form Elements"><i class="entypo-doc-text"></i><span>Form Elements</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="text-editor.html" title="Text Editor"><i class="entypo-language"></i><span>Text Editor</span></a>
                                        </li>

                                        <li>
                                            <a class="tooltip-tip2" href="file-upload.html" title="File Upload"><i class="entypo-upload"></i><span>File Upload</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Tables">
                                        <i class="icon-menu fa fa-table fa-lg"></i>
                                        <span>Tables</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a class="tooltip-tip2" href="table-static.html" title="Table Static"><i class="entypo-layout"></i><span>Table Static</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="table-dynamic.html" title="Table Dynamic"><i class="entypo-menu"></i><span>Table Dynamic</span></a>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="icon.html" title="Icons">
                                        <i class="icon-menu fa fa-bolt fa-lg"></i>
                                        <span>Icons</span>
                                    </a>

                                </li>
                                <li>
                                    <a class="tooltip-tip" href="typhography.html" title="Typhoghrapy">
                                        <i class="icon-menu fa fa-text-height fa-lg"></i>
                                        <span>Typhoghrapy</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="login">
                                        <i class="icon-menu fa fa-sign-in fa-lg"></i>
                                        <span>Login</span>
                                    </a>
                                    <ul>
                                        <li class="">
                                            <a class="tooltip-tip2" href="login1.html" title="Login 1"><i class="entypo-doc-text"></i><span>Login Example 1</span></a>
                                        </li>
                                        <li>
                                            <a class="tooltip-tip2" href="login2.html" title="Login 2"><i class="entypo-language"></i><span>Login Example 2</span></a>
                                        </li>

                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SIDE MENU -->