<?php
class MySQLResult 
{
	protected $mysql;
	protected $query;

	function __construct( &$mysql, $query )
	{
	 $this->mysql = &$mysql;
	 $this->query = $query;
	}

    function size()
    {
        return mysqli_num_rows($this->query);
    }

    function fetch()
    {
		if ( $row = mysqli_fetch_array( $this->query , MYSQLI_ASSOC ))
		{
		   return $row;
		}
		else if ( $this->size() > 0 )
		{
		   mysqli_data_seek ( $this->query , 0 );
		   return false;
		}
		else
		{
		   return false;
		}         
    }

    function insertID()
    {
        return mysqli_insert_id($this->mysql->dbConn);
    }

	function isError()
	{
		return $this->mysql->isError();
	}
}