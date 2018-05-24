<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <!-- <meta name="description" content="Responsive admin dashboard and web application ui kit. "> -->
        <meta content="blank, starter" name="keywords">
        <title>
            <?php 
            if(isset($title))echo $title; 
            else echo "Dashboard - Ayam Nelongso Admin"?>
        </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
        <!-- Styles -->
        <link href="<?php echo base_url('resources/');?>assets/css/core.min.css" rel="stylesheet">
        <link href="<?php echo base_url('resources/');?>assets/css/app.min.css" rel="stylesheet">
        <link href="<?php echo base_url('resources/');?>assets/css/style.css" rel="stylesheet">
        <!-- Favicons -->
        <link href="<?php echo base_url('resources/');?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="<?php echo base_url('resources/');?>assets/img/favicon.png" rel="icon">
        <script src="<?php echo base_url('resources/');?>assets/js/core.min.js"></script>
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner-dots">
                <span class="dot1">
                </span>
                <span class="dot2">
                </span>
                <span class="dot3">
                </span>
            </div>
        </div>
        <!-- Sidebar -->
        <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
            <header class="sidebar-header">
                <span class="logo">
                    <a href="<?php echo base_url();?>">
                        <span style="font-weight: 100">
                            Nelongso
                        </span>
                        Admin
                    </a>
                </span>
                <span class="sidebar-toggle-fold" style="margin-right: 15px">
                </span>
            </header>
            <nav class="sidebar-navigation">
                <ul class="menu flex-container menu-nav-drawer">
                    <li class="menu-item root" id="<?php echo base_url();?>">
                        <a class="menu-link" href="<?php echo base_url();?>">
                            <span class="icon fa fa-home">
                            </span>
                            <span class="title">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="menu-item root" id="<?php echo base_url('manajemen-barang');?>">
                        <a class="menu-link" href="#" >
                            <span class="icon fa fa-bars">
                            </span>
                            <span class="title">
                                Manajemen Barang
                            </span>
                        </a>
                        <ul class="menu-submenu">
                            <li class="menu-item">
                                <a class="menu-link" href="<?php echo base_url('manajemen-barang');?>" target="_self">
                                    <span class="icon fa fa-bars">
                                    </span>
                                    <span class="title">
                                        Manajemen Barang
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="<?php echo base_url('manajemen-barang');?>#tambah-barang">
                                    <span class="dot">
                                    </span>
                                    <span class="title">
                                        Tambah Barang
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item root" id="log-aktivitas">
                        <a class="menu-link" href="<?php echo base_url('log-aktivitas') ?>">
                            <span class="icon fa fa-home">
                            </span>
                            <span class="title">
                                Log Aktivitas
                            </span>
                        </a>
                    </li>
                    
                    <li class="menu-item root" id="tambah-admin">
                        <a class="menu-link" href="<?php echo base_url('register') ?>">
                            <span class="icon fa fa-user">
                            </span>
                            <span class="title">
                                Tambah Admin
                            </span>
                        </a>
                    </li>
                    <div class="spacer"></div>
                    <li><a href="<?php echo base_url('logout') ?>" class="form-control btn btn-primary">Log Out</a></li>
                </ul>
            </nav>
        </aside>
        <!-- END Sidebar -->
        <!-- Topbar -->
        <script>
            var base="<?php echo base_url();?>";
            console.log(base);
            var link = location.href.toString().replace(base,'');
            var index=true
            $('.menu-item.root').each(function(idx,val){
                var text=$(this).prop('id').toString().replace(base,'');
                if(link === text) {
                    console.log('test true');
                    $(this).addClass('active')
                    index=false
                }
            });
            if(index) $('.menu-item.root').eq(0).addClass('active');
        </script>