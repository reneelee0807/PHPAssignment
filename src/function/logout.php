<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
session_unset();
session_destroy();
session_start();
$language = 'en';
$ini_array = null;
$_SESSION[ 'language' ] = $language;
header ("Location: ../layout/login.php") ;





//header ("Location: ../../userPage.php") ;