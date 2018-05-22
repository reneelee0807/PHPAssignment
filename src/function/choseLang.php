<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	
	if (isset( $_POST['language']))
    {
        $language = $_POST['language'];
    }
			
	else
	{
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	}
	
	$ini_array = parse_ini_file('H:\webdev2016\www\www\ass2\src\language\language.ini', true);
	session_start();
	$_SESSION[ 'language'] = $language;
	header( 'Location: login.php' ) ;


	/* $alanguage = new Community($db, $community);
			$aCommunity->setCommunity($community);
			//$Community = $aCommunity->getCommunityName();
			
			
			if ( !$theLoginID )
			{
				$result = false;
				echo "Not a valid userId, password combination <br>";
			}    
			else
			{
				session_save_path('./');
				session_start();

				$_SESSION[ 'theLoginID'] = $theLoginID;
				$_SESSION[ 'Community' ]= $community;
				header( 'Location: userPage.php' ) ;
			}     */
}
	 
     




	  
?>