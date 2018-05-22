<?php

require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');



?>
  


<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>
	<!--<link rel="stylesheet" href="../../css/stylesheet.css">!-->
	<link rel="stylesheet" type="text/css" href="../../<?php echo $community->getCssFile(); ?>"></link>
</head>
<body>
		<header>
			<div class="inner">
			<h1></h1>			
			</div>
		</header>
		<div id="content" class="inner">
		<main>
			<div class ="Change password page">
				<form class="form" method="POST" action="../../src/function/changePasswordPHP.php">
					 
					<label for="password"><?php echo $ini_array[$language]['Please enter your new password']?></label>
					<input type="password" name="newPassword1"></input>
					<br>
					<label for="password"><?php echo $ini_array[$language]['Please confirm your password']?></label>
					<input type="password" name="newPassword2"></input>
					<br>			
					
					<br>
					<button id="btnConfirm"><?php echo $ini_array[$language]['SUBMIT']?></button>					
				</form>
				<br><br>
				<a href="../layout/userPage.php"><?php echo $ini_array[$language]['Return To home page']?></a>
			</div>			
		</main>
		</div>
		<footer>
			<div class="inner">
			<p></p>
			</div>
		</footer>
	</body>

</html>