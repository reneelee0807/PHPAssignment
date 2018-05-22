<?php

require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/user.php');

$user= getAUser($db, $userId);
$row = $user->fetch();
$theUserId = $row['userId'];

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
		<div class ="Change information page">			
		<form class="form" method="POST" action="../../src/function/changeInfoPHP.php">
				<label for="theFName"><?php echo $ini_array[$language]['First Name']?></label>
				<input type="text" name='theFName' value="<?php echo $row['fName']; ?>">								
				<br>
				
				<label for="theLName"><?php echo $ini_array[$language]['Last Name']?></label>
				<input type='text' name='theLName' value ="<?php echo $row['lName'];?>"></input> 
				<br>
			
				<label for="theEmail"><?php echo $ini_array[$language]['Email']?></label>
				<input type='email' name='theEmail' value ="<?php echo $row['emailAddress'];?>"></input> 
				<br>
				
				<label for="theDob"><?php echo $ini_array[$language]['date of Birth']?></label>
				<input type='date' name='theDob' value ="<?php echo $row['dob'];?>"></input> 
				<br>
				
				<label for="theGender"><?php echo $ini_array[$language]['Gender']?></label>
				<input type='text' name='theGender' value ="<?php echo $row['gender'];?>"></input>
				<br>
				
				<label for="theLocation"><?php echo $ini_array[$language]['Location']?></label>
				<input type='text' name='theLocation' value ="<?php echo $row['location'];?>"></input>
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
