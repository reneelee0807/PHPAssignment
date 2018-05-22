<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/RegisterUser.php');
include_once(Class_PATH.'/NewLogin.php');

function isValidUserId($db, $userId)
{
	$result = true;
	$exitUserId = getAUser($db, $userId);
	if($userId == $exitUserId )
	{
		$result= false;
		echo 'the user id has been used';
	}
	return $result;
}

if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	$userId = "";
	$fName = "";
	$lName = "";
	$password = "";
	$emailAddress = "";
	$dob = "";
	$gender = "";
	$location = "";
	if (isset( $_POST[ 'userId' ])) 
	{
		$userId = $_POST[ 'userId' ];
	}
	if (isset( $_POST[ 'theFName' ]) ) 
	{
		$fName = $_POST[ 'theFName' ];
	}
	if (isset( $_POST[ 'theLName' ] ) ) 
	{	
		$lName = $_POST[ 'theLName' ];
	}
	if (isset( $_POST[ 'thePassword' ]) ) 
	{
		$password = $_POST[ 'thePassword' ];
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
	if ( isValidUserId($db, $userId,$fName,$lName,$password,$emailAddress,$dob,$gender,$location) == true )
	{

		if(isValidUserId( $db, $userId))
		{
			$aUser = new RegisterUser($db);
			$aUser->setUser($userId,$fName,$lName,$emailAddress,$dob,$gender,$location);
			$aUser->finalize();
			
			$aLogin = new NewLogin($db);
			$aLogin->setLogin($userId,$password);
			$aLogin->finalize();
			
			header( 'Location: ../layout/login.php' ) ;
		}
		else
		{
			echo "invalid id";
		}
		
	}
	
}

?>