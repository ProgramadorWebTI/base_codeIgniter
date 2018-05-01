<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Heuder Rodrigues de Sena">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	
	<link rel="icon" href="<?php echo base_url('assets/imagem/ico/favicon.ico'); ?>">

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

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url(); ?>">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><?php echo $title; ?></li>
			</ol>
		</div><!--/.row-->
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div> -->
		<!--/.row-->


