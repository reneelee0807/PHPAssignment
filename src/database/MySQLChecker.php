<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
require_once('MySQLDB.php');
require_once(Database_PATH . DS . 'IQuery.php');
require_once(Database_PATH . DS . 'ICreateTable.php');
class MySQLChecker extends MySQL implements IDatabase, ICreateTable, IQuery
{
	public function connectToServer()
	{
		if(parent:: connectToServer())
		{			
		}			
		else
		{
			echo "<br> connected to server <br>";
		}	   
	}
	public function selectDatabase()
    {
		if (parent:: selectDatabase() )
		{          
		}
	   else
		{
			echo "<br> $this->dbName  database selected <br>";
		}
    }
	public function dropDatabase()
    {		
		if ( parent:: dropDatabase()  )
		{	
		}
		else
		{
			echo "the $this->dbName database was not dropped<br>";
		}
    }
	public function createDatabase()
    {		
		if ( parent:: createDatabase() )
		{
		}
		else
	   {
			echo "the $this->dbName database was not created<br>";
	   }
    }
	public function isError()
    {		if  ( parent:: isError() )
		{
		}
		if (parent:: isError())
		{
		}
		else
		{
		   return true;   
		}
    }
	public function createTable($table, $sql )
	{
		if ( parent:: createTable() )
		{			
		}
		else
		{
			echo "$table was not added<br>";
		}
    }
}