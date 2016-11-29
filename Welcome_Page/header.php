<?php
	include_once("../Modal/modal-choose-type.php");
	include_once("../Modal/modal-login.php");
?>
<html>
	<head>
		<title>CampusHire</title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>

		<nav class = "navbar navbar-inverse header_nav">
			<div class= "container-fluid">
				<div class ="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			      		  <span class="icon-bar"></span>
			      		  <span class="icon-bar"></span>
			      		  <span class="icon-bar"></span>                        
	      			</button>
					<a class ="navbar-brand header_font_style" href="welcome.php">CampusHire</a>	
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class ="nav navbar-nav navbar-right">
						<li><a href="#" data-toggle="modal" data-target="#select-action1" id="login">LOG IN</a></li>
						 <li><a href="#" data-toggle="modal" data-target="#select-action" id="sign-up">SIGN UP</a></li>
					</ul>
				</div>
			</div>
		</nav>
	