<!DOCTYPE html>
<html lang="en">	
<head>
	<?php
		$bootstrap = base_url('bootstrap');
	?>
	<!-- To ensure proper rendering and touch zooming -->
	<!-- can disable zooming capabilities by adding "user-scalable=no"-->
	<!-- then users are only able to scroll -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- load css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/jumbotron.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/bootstrapValidator.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$bootstrap?>/css/bootstrap.css"/>
	<!-- load js -->
	<script type="text/javascript" src="<?=base_url()?>/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/js/bootstrapValidator.js"></script>
	<script type="text/javascript" src="<?=$bootstrap?>/js/bootstrap.js"></script>
	
	<title><?=$title;?></title>

</head>
<body>
	<div class="header">
		<ul class="nav nav-pills pull-right">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<h3 class="text-muted">TEST</h3>
	</div>