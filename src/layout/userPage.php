<?php

//require_once  ('src/initialize/initialize.php');
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/ExistPost.php');
include_once(Class_PATH.'/post.php');
include_once(Class_PATH.'/community.php');

$count = getPostCount($db, $userId);
$aRow = $count->fetch();
$myCount =$aRow['count(postId)'];

?>
<html>


<br>


	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../<?php echo $community->getCssFile(); ?>"></link>

	
	</head>
	<body class="inner">
		<header>
			<div>
				<h1 id = "title"><?php echo $ini_array[$language] [$community->getTitle()]; ?></h1>
				<img src = "../../<?php echo $community->getLogo(); ?>">	
			</div>
		</header>
		<div id="content" >
		<main id="content">		
			
			<div>
				<div>
					<?php 
					$aUser = new ExistUser($db);
					$aUser->getUserId($userId);
					$myname = $aUser->getAUserId();
					//var_dump ($myname);
					$aUser->display($myname);?>
					<br>			
					<a href="../../src/function/logout.php"><?php echo $ini_array[$language]['Log Out'];?></a>
					<br>	
					<p class="message"><?php echo $ini_array[$language]['forgot password?'];?>
					<a href="changePassword.php"><?php echo $ini_array[$language]['Change Password'];?></a>
					</p>
					<br>
					<p class="message"><?php echo $ini_array[$language]['want to change information'];?>
					<a href="changeInfo.php"><?php echo $ini_array[$language]['Change information'];?></a>
					</p>
					<br/>
					<h3><?php echo $ini_array[$language]['You has sent'];?>
					<span class='label label-success'><?php echo $myCount;?></span>
					<?php echo $ini_array[$language]['post'];?></h3>
				</div>
				<div id = mainSession>
					<form class="form" method="POST" action="../../src/function/createPost.php">
						<textarea id = "postBox" name = "thePostContent" placeholder="<?php echo $ini_array[$language]['What is in your mind']?>"></textarea>
						
						<input  type="text" id="theFriensName" name="theFriensName"  placeholder="<?php echo $ini_array[$language]['who are you with']?>"></input>

						
						<div id ="function">
							<div class="privateOption">
								<select name = "thePrivacyOption">
								<option selected><?php echo $ini_array[$language]['Public']?></option>
								<option><?php echo $ini_array[$language]['Friends']?></option>
								</select>
							</div>
							<button id= "postBtn"><?php echo $ini_array[$language]['Post'];?></button>
						</div>					
					</form>
					<?php   
					$aPost = new ExistPost($db);
					$posts = $aPost->getMyPost($db, $myname);
					$aPost->display($posts);
					?>
				</div>
				<div id = leftSession>
					<form class="form-horizontal" method="POST" action="../../src/function/findme.php">
					<input type="text" id="search" name="theWords" placeholder="<?php echo $ini_array[$language]['Search..'];?>">
					
						<input type='Submit' value="<?php echo $ini_array[$language]['Search'];?>">
					</form>
					<?php
					if(isset( $_SESSION[ 'theWords' ] ))
					{
						$allPosts = getAllPost($db, $search);	
						displaySearchPost($allPosts);
					}
					?>
				</div>
				
				
				
			</div>			
		</main>
		</div>
		<footer>
			<div class="inner">
			<p></p>
			</div>
		</footer>
	</body>

<br><br>
</html>