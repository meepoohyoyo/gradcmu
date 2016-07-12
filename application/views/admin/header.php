<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration Page</title>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url("assets/backend/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url("assets/backend/plugins/jQuery/jQuery-2.1.3.min.js");?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url("assets/backend/bootstrap/js/bootstrap.min.js");?>" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
</head>
<body>

<ul>
  <li><a class="<?php echo isset($active)&&$active==='home'?"active":""; ?>" href="<?php echo site_url("admin"); ?>">Home</a></li>
  <li><a class="<?php echo isset($active)&&$active==='addnew'?"active":""; ?>" href="<?php echo site_url("addnew"); ?>" >Add New</a></li>
  <li style="float:right"><a href="<?php echo site_url("logout"); ?>">Log out</a></li>
</ul>