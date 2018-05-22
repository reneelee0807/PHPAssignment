<?php

require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/user.php');
 
 if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	$fName = "";
	$lName = "";
	$password = "";
	$emailAddress = "";
	$dob = "";
	$gender = "";
	$location = "";

	if (isset( $_POST[ 'theFName' ]) ) 
	{
		$fName = $_POST[ 'theFName' ];
	}
	if (isset( $_POST[ 'theLName' ] ) ) 
	{	
		$lName = $_POST[ 'theLName' ];
	}
	if (isset( $_POST[ 'theEmail' ] ) ) 
	{	
		$emailAddress = $_POST[ 'theEmail' ];
	}if (isset( $_POST[ 'theDob' ]) ) 
	{
		$dob = $_POST[ 'theDob' ];
	}
	if (isset( $_POST[ 'theGender' ] ) ) 
	{	
		$gender = $_POST[ 'theGender' ];
	}
	if (isset( $_POST[ 'theLocation' ] ) ) 
	{	
		$location = $_POST[ 'theLocation' ];
	}

	$aUser = new ExistUser($db);
	$aUser->getUserId($userId);
	$AFName = $aUser->getFName();
	$aUser -> setUser($userId,$fName,$lName,$emailAddress,$dob,$gender,$location);	
	
	$aUser->finalize();

	header( 'Location: ../layout/userPage.php' ) ;
	
		

}  

?>