<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
require_once(Database_PATH . DS . 'IDatabase.php');

class MySQL 
{
	protected $host;
	protected  $dbUser;
	protected  $dbPass;
	protected  $dbName;
	protected  $dbConn;
	protected  $dbconnectError;

	function __construct($host, $dbUser, $dbPass, $dbName )
	{
		$this->host   = $host;
		$this->dbUser = $dbUser;
		$this->dbPass = $dbPass;
		$this->dbName = $dbName;
		$this->connectToServer();
	}
	public function connectToServer()
	{
		$this->dbConn = mysqli_connect( $this->host, $this->dbUser, $this->dbPass );
		if ( !$this->dbConn )
		{
		   trigger_error('could not connect to server' );
		   $this->dbconnectError = true;
		}	   
	}
	public function selectDatabase()
    {
    if (! mysqli_select_db( $this->dbConn, $this->dbName ) )
           {
              trigger_error( 'could not select database' );  
              $this->dbconnectError = true;                     
           }
    }
	public function dropDatabase()
    {
		$sql = "drop database $this->dbName";
        echo "<br> $sql  <br>";
		if ( $this->query($sql) )
		{
			echo "<br> the $this->dbName database was dropped<br>";
		}
    }
	public function createDatabase()
    {
		$sql = "create database if not exists $this->dbName ";
		echo "<br> $sql  <br>";
		if ( $this->query($sql) )
		   {
				echo "the $this->dbName database was created<br>";
		   }
    }
	public function isError()
    {
		if  ( $this->dbconnectError )
		{
		 return true;
		}
		$error = mysqli_error( $this->dbConn );
		if (empty ($error))
		{
		   return false;
		}
    }
	public function createTable($table, $sql )
	{
		$result = $db->query($sql);
		if ( $result == True )
		{
			echo "$table was added<br>";
		}
    }
	function query( $sql )
	{
		mysqli_query( $this->dbConn, "set character_set_results='utf8'"); 
		 if (!$queryResource = mysqli_query($this->dbConn, $sql ))
		 {
			trigger_error ( 'Query Failed: <br>' . mysqli_error($this->dbConn ) . '<br> SQL: ' . $sql );
			return false;
		 }	 
		 return new MySQLResult( $this, $queryResource ); 
   }	
}