
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<html>
		<head>
			<!-- links css to home page -->
			<link rel="stylesheet" type="text/css" href="css/main.css"> 
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width">
			<meta name="viewport" content="width=320">
			<title>Blogs</title>
		</head>
		
		<header id="header">
			<img src="http://fontmeme.com/newcreate.php?text=Hayden%20Guthrie&name=Simply Glamorous.ttf&size=37&style_color=070733" alt="Cursive Fonts">
			<div class="line"></div>
		</header>
		<body>

		<!-- Single button -->
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		    Acount <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="<?php echo $path . "register.php"?>"><span class="glyphicon glyphicon-user "></span></p> Register </a>
			</li>
		    <li><a href="<?php echo $path . "login.php"?>"> <span class="glyphicon glyphicon-log-in"></span></p>Login </a></li>
		    <li class="divider"></li>
		    <li><a href="<?php echo $path . "controller/logout-user.php"?>"><span class="glyphicon glyphicon-log-out"></span></p> Logout </a>
			</li>
		  </ul>
		</div>


						
		