<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/post.php');
function isValidForm( $theWords  ) 
{
	$result = true;

	if ( empty( $theWords )  )
	{
	   $result = false;
	   echo 'Please enter a word or words for your search<br>';
	}

	return $result;

}
if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
    $unsafeWords = $_POST[ 'theWords' ];
	$theWords = htmlspecialchars($unsafeWords, ENT_QUOTES, 'UTF-8');
	
	if ( isValidForm ( $theWords )  )
    {
		$_SESSION[ 'theWords'] = $theWords;
		header("Location:../layout/userPage.php");
    }
} 
?>
