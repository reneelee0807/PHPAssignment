<?php
//session_save_path("./");
session_start();
include_once(Class_PATH.'/user.php');
include_once(Class_PATH.'/community.php');
include_once(Class_PATH.'/login.php');
include_once(Class_PATH.'/ExistUser.php');
include_once(Class_PATH.'/RegisterUser.php');


if ( isset( $_SESSION[ 'theLoginID' ] ) )
{
    $userId = $_SESSION[ 'theLoginID' ];
	//$user = new User($db);
	$user = new ExistUser($db);
	
	//$user->getUserId($userId);
}
else
{
    $userId = null;
    $_SESSION[ 'theLoginID' ] = $userId;
	$_SESSION['Community'] = 'Baghchal';
	
}
if( isset($_SESSION[ 'Community' ]))
{
    $communityName = $_SESSION['Community'];
	$community = new Community($db, $communityName);
				
}
if (isset( $_SESSION['language']))
{
	$language = $_SESSION[ 'language'];
	$_SESSION[ 'language'] = $language;
	$ini_array= parse_ini_file('H:\webdev2016\www\www\ass2\src\language\language.ini', true);
}
else
{
	$language = 'hindi';
	$ini_array = null;
	$_SESSION[ 'language' ] = $language;
}
	
if ( isset( $_SESSION[ 'theWords' ] ) )
{
	$search = $_SESSION[ 'theWords' ];
	
}
else
{
	$search = null;
	$_SESSION[ 'theWords' ] = $search;
}	
	

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();   
    session_destroy();
	header( 'Location: login.php' ) ;
}
$_SESSION['LAST_ACTIVITY'] = time();

