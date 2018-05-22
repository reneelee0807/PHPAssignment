<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));

class Login 
{
	protected $db;
	protected $userId;
	protected $password;
	protected $hashed_password;
	
	function __construct(IDatabase $db)
	{
		$this->db = $db;
	}
	public function setLogin($userId,$password)
	{
		$this->userId = $userId;
		$this->password = $password;
		$this->hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
		var_dump($this->hashed_password);
	}
	public function getUserId()
	{
		$sql = "select * from login where userId = '$this->userId'";
		$result = $this->db->query($sql);
		$result = $result->fetch();
		$this->userId = $result['userId'];
	}

	public function getLogin() 
	{
		$sql = "select * from login where userId = '$this->userId' ";
		$result = $this->db->query($sql);
		$result = $result->fetch();
		$hashed_password = $result['password'];
		
		if(password_verify($this->password, $hashed_password))
		{
		return $user = $result['userId'];
		}
		else
		{
			echo 'wrong combination';
		}
	}
	
	public function finalize()
	{
		
	}

}