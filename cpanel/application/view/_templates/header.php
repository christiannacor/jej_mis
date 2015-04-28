<!DOCTYPE html>
<html lang="en" onContextMenu="return false;" ondragstart="return false" onselectstart="return false">
<head>
    <meta charset="utf-8">
    <title>JEJ CPANEL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/mobilestyle.css" rel="stylesheet" media="all and (max-width: 720px)">
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet" media="all and (min-width: 721px)">
    <link href="<?php echo URL; ?>css/picol.css" rel="stylesheet">
    
    <!-- JS -->
    <!--[if lt IE 9]>
        <script src="<?php echo URL; ?>js/html5shiv.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
        <script src="<?php echo URL; ?>js/html5shiv.js"></script>
    <![endif]-->
    <script src="<?php echo URL; ?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo URL; ?>js/application.js" type="text/javascript"></script>
    <script src="<?php echo URL; ?>js/sorttable.js" type="text/javascript"></script>
</head>
<body>
    
    <div class="header">
        <span class="logo">
            JEJ // <span class="mobilizer_logo">MOBILIZER</span>
        </span>
        <div class="navigation-mobi">
            <a href="<?php echo URL; ?>" title="Home"><i class="picol_home"></i></a>
            <a href="<?php echo URL; ?>dashboard" title="Dashboard"><i class="picol_xml"></i></a>
            <a href="<?php echo URL; ?>settings" title="Settings"><i class="picol_settings"></i></a>
            <a href="<?php echo URL; ?>help" title="Help"><i class="picol_questionmark"></i></a>
            <a href="<?php echo URL; ?>about" title="About Us"><i class="picol_globe"></i></a>
            
            <a href="<?php echo URL; ?>logout" style="float: right; margin-left: 4px;"><i class="picol_logout"></i></a>
            <a href="<?php echo URL; ?>settings" style="float: right;"><i class="picol_settings"></i></a>
            <a href="<?php echo URL; ?>account" style="float: right;">Hi <?php echo $_SESSION['user_name']; ?></a>
        </div>
        <div class="navigation">
            <a href="<?php echo URL; ?>"><i class="picol_home"></i>home</a>
            <a href="<?php echo URL; ?>dashboard"><i class="picol_xml"></i>dashboard</a>
            <a href="<?php echo URL; ?>help"><i class="picol_questionmark"></i>help</a>
            <a href="<?php echo URL; ?>about"><i class="picol_globe"></i>about us</a>
            
            <a href="<?php echo URL; ?>logout" style="float: right; margin-left: 4px;"><i class="picol_logout"></i></a>
            <a href="<?php echo URL; ?>settings" style="float: right;"><i class="picol_settings"></i></a>
            <a href="<?php echo URL; ?>account" style="float: right;">Hi <?php echo $_SESSION['user_name']; ?></a>
        </div>
    </div>
    <div style="height: 100px;" class="space"></div>
    
    <div id="page_loader_alt" onload="" ></div>
