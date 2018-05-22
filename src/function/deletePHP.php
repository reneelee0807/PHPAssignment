<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/ExistPost.php');

$deleteMessage = $_GET['id'];
$confirmed = '';


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	if(isset($_POST['myDelete'])) 
	{
    $postId = $_POST['myDelete']; // get the variable id
	$aPost = new ExistPost($db);
	$aPost->getPostId($postId);
	echo "$aPost->getPost()";
	$aPost->finalize();
	header("Location:../layout/userPage.php");
	}
	
}



?>