<?php
require_once('MySQLChecker.php');

$host = 'localhost' ;
$dbUser ='root';
$dbPass ='';
$dbName ='communityDB';
 
$db = new MySQLChecker(  $host, $dbUser, $dbPass, $dbName ) ;
/* $db->dropDatabase();
$db->createDatabase(); */
$db->selectDatabase();
?>