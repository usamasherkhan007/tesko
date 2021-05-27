<!DOCTYPE html>
<html>
<!--ADD FILES-->
<link href="<?php echo App::make('url')->to('/');?>/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--END-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<a class="navbar-brand" href="<?= url('main'); ?>" ><i class="fas fa-bars fa-2x"></i></a>
			<a class="navbar-brand" href="<?= url('main'); ?>" style="font-size: 28px;font-style: italic;">VPhub</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					
					<li style="padding-left: 212px;   padding-top: 7px;">
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</li>
					<li class="nav-item active"  style="padding-left: 197px;">
						<div class="dropdown">
						<i class="fas fa-camera fa-2x" data-toggle="dropdown" style="color: white; padding-top: 7px; padding-right: 5px;"></i>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= url('add_video'); ?>">Add Video</a>
							<a class="dropdown-item" href="<?= url('list_video'); ?>">Your`s Video</a>
							<a class="dropdown-item" href="#">Stream Video</a>
							</div>
						</div>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fas fa-bullseye fa-2x"></i></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fas fa-bell fa-2x"></i></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fas fa-user fa-2x"></i></a>
					</li>
					
				</ul>
				
			</div>
		</nav>
<head>
	<title>Main Page</title>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="<?php echo App::make('url')->to('/');?>/stackpath/scss/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>