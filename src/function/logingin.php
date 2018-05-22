<?php
//require_once  ('src/initialize/initialize.php');
//require_once  ('H:/webdev2016/www/www/ass2/src/initialize/initialize.php');
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');
//include_once('../choseLang.php');


function isValidLogin(  $userId , $password ) 
{
   $result = true;
   
   if ($userId =='')
   {
        $result = false;
        echo 'A user ID must be entered <br>';
   }    
   if ($password =='')
   {
        $result = false;
        echo 'A password must be entered <br>';
   }
    return $result;
}

function validateInput($input)
{
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
	$symbols = array('"',"'");
	$alts = array('&quot;', "&apos;");
	$input = str_replace($symbols,$alts,$input);
	return $input;
}

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	if (isset( $_POST[ 'userId' ]))
    {
		$unsafeUserId = $_POST[ 'userId' ];
		$userId = validateInput($unsafeUserId);
    }
    if (isset( $_POST[ 'password' ]) )
    {
        $unsafePassword = $_POST[ 'password' ];
		$password = validateInput($unsafePassword);
    }
	
	if (isset( $_POST['community']))
    {
        $community = $_POST['community'];
    }
	if (isset( $_POST['language']))
    {
        $language = $_POST['language'];
    }
			
	else
	{
		$language = 'en';
		$ini_array = null;
	}
	
	$ini_array = parse_ini_file('H:\webdev2016\www\www\ass2\src\language\language.ini', true);
	
	 
		if ( isValidLogin( $userId, $password ) )
		{
		$aLogin = new Login($db);
		$aLogin->setLogin($userId,$password);
		$theLoginID = $aLogin->getLogin();

		$aCommunity = new Community($db, $community);
		$aCommunity->setCommunity($community);	
			
			if ( !$theLoginID )
			{
				$result = false;
				
				echo "Not a valid userId, password combination <br>";
			}    
			else
			{
				//session_save_path('./');
				session_start();
				$_SESSION[ 'theLoginID'] = $theLoginID;
				$_SESSION[ 'Community' ]= $community;
				$_SESSION[ 'language'] = $language;

				header( 'Location: ../layout/userPage.php' ) ;
		
			}    
		}
	 
     
}



