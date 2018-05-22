<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/NewPost.php');
include_once(Class_PATH.'/NewTag.php');


if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{	
	date_default_timezone_set('NZ');
	$postTime = date("Y-m-d H:i:s");
	$userId = $_SESSION[ 'theLoginID' ];
	if (isset( $_POST[ 'search' ]) )
	{
		$search = $_POST['search']; 
		getAllPost($db, $search);
	}
	
	
	if (isset( $_POST[ 'thePostContent' ]) )
	{
		$unsafePostContent = $_POST[ 'thePostContent' ];
		$postContent = htmlspecialchars($unsafePostContent, ENT_QUOTES, 'UTF-8');

	}
	if (isset( $_POST[ 'thePrivacyOption' ]) )
	{
		$privacyOption = $_POST[ 'thePrivacyOption' ];
	}
	if (isset( $_POST[ 'theFriensName' ]) )
	{
		$taggedUserId = $_POST[ 'theFriensName' ];
	}

			$aPost = new NewPost($db);
			$aPost->setPost($postTime,$userId,$postContent,$privacyOption );
			$aPost->finalize();
			//header("Location:../layout/userPage.php");
	
	if(!empty($taggedUserId ))
	{
		$exitUserId = getAUser($db, $taggedUserId);
		$result= $exitUserId->fetch();
		$result=$result['userId'];

		
		if($taggedUserId ==$result)
		{
		$postId = getPostId($db,$userId,$postTime);	
		
		$aTag = new NewTag($db);
		$aTag -> setTag($postId,$userId,$taggedUserId);
		$aTag -> finalize();
		}
	
	}
	
	
	
}