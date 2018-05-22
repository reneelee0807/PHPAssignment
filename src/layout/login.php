<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');
include_once(Function_PATH.'/logingin.php');

?>
	  


<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Form</title>
	<link rel="stylesheet" href="../../css/stylesheet.css">
</head>
<body class="inner">
		<header>
		<div >
		<h1></h1>			
		</div>
		</header>
		<div>
		<main>
			<div>
				
				<form class="form" method="POST" action="../../src/function/logingin.php">
					<label for="loginName"><?php echo $ini_array[$language]['User ID']?></label>
					<input type="text" name="userId"></input>
					<br>
					<label for="password"><?php echo $ini_array[$language]['Password']?></label>
					<input type="password" name="password"></input>
					<br>	
					<label><?php echo $ini_array[$language]['community']?></label>
					<select name="community" required>
						<option value="baghchal"><?php echo $ini_array[$language]['Baghchal']?></option>
						<option value="hindi"><?php echo $ini_array[$language]['Hindi Language']?></option>
					</select>
					<br>
					<label><b>Choose Language</b></label>
					<select name="language" required>
						<option value="hindi">Hindi</option>
						<option value="en">English</option>			
					</select>
					<p class="message"><?php echo $ini_array[$language]['Not registered?']?>
					<a href="registerPage.php"><?php echo $ini_array[$language]['Create an account']?></a>
					</p>
					 <br>
					<button id="btnLogin"><?php echo $ini_array[$language]['LOGIN']?></button>					
				</form>
				<br><br>
				<a href="main.php">Return To Main Form</a>
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