<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Base</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-tagsinput-latest/css/bootstrap-tagsinput.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-tagsinput-latest/css/app.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
	<!-- Thema CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/tema/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/tema/css/datepicker3.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/tema/css/styles.css'); ?>">
	<!-- font-family: 'Montserrat', sans-serif; -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.mask.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-tagsinput-latest/js/bootstrap-tagsinput.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

	<script src="<?php echo base_url('assets/tema/js/chart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/tema/js/chart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/tema/js/easypiechart.js'); ?>"></script>
	<script src="<?php echo base_url('assets/tema/js/easypiechart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/tema/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/tema/js/custom.js'); ?>"></script>

	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</head>
<body>
<?php $this->load->view('template/nav'); ?>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->


