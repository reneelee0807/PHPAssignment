<?php

require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/user.php');
include_once(Class_PATH.'/login.php');


?>
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration Form</title>
	<link rel="stylesheet" href="../../css/stylesheet.css">
	</head>
	<body>
		<header>
			<div class="inner">
			<h1></h1>			
			</div>
		</header>
		<div id="content" class="inner">
		<main>
			<div class ="register Page">
				<form method="POST" action="../../src/function/choseLang.php">
						<label><b>Choose Language</b></label>
						<select name="language" required>
							<option value="english">English</option>
							<option value="hindi">Hindi</option>
						</select>
						<input type ="submit" name = "chooseLang" value ="set language">
				</form>
				<form class="form" method="POST" action="../../src/function/registerPagePHP.php">
					<label for="loginName"><?php echo $ini_array[$language]['User ID']?></label>
					<input type="text" name="userId"></input>
					<br>
					<label for="theFName"><?php echo $ini_array[$language]['First Name']?></label>
					<input type="text" name="theFName"></input>
					<br>
					<label for="theLName"><?php echo $ini_array[$language]['Last Name']?></label>
					<input type="text" name="theLName"></input>
					<br>
					<label for="thePassword"><?php echo $ini_array[$language]['Password']?></label>
					<input type="password" name="thePassword"></input>
					<br>	
					<label for="theEmail"><?php echo $ini_array[$language]['Email']?></label>
					<input type="email" name="theEmail"></input>
					<br>
					<label for="theDob"><?php echo $ini_array[$language]['date of Birth']?></label>
					<input type="date" name="theDob"></input>
					<br>
					<label for="theGender"><?php echo $ini_array[$language]['Gender']?></label>
					<input type="text" name="theGender"></input>
					<br>
					<label for="theLocation"><?php echo $ini_array[$language]['Location']?></label>
					<input type="text" name="theLocation"></input>
					<br>
					<p class="message"><?php echo $ini_array[$language]['Already registered?']?> 
					<a href="login.php"><?php echo $ini_array[$language]['Sign In']?></a>
					</p>
					<br>
					<button><?php echo $ini_array[$language]['SUBMIT']?></button>
				</form>
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