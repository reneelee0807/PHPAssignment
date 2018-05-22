<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/ExistLogin.php');

function isValidPassword(  $thePassword1 , $thePassword2 ) 
{
   $result = true;
   
   if ($thePassword1 != $thePassword2)
   {
        $result = false;
        echo 'the password is not matching <br>';
   }    
   
    return $result;
}
 
 if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	if (isset( $_POST[ 'newPassword1' ]) ) 
	{
		$thePassword1 = $_POST[ 'newPassword1' ];
	}
	if (isset( $_POST[ 'newPassword2' ]) ) 
	{
		$thePassword2 = $_POST[ 'newPassword2' ];
	}

	 if ( isValidPassword( $thePassword1 , $thePassword2 ) )
	{
		$hashed_password1 = password_hash($thePassword1, PASSWORD_DEFAULT);		
		$aLogin= new ExistLogin($db);
		$aLogin->getUserId($userId);
		$aLogin->setLogin($userId,$hashed_password1);
		$aLogin->finalize();
		
		header( 'Location: ../layout/login.php' ) ;
	}	
}  

?>