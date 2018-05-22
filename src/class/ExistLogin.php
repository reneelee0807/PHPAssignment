<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');
class ExistLogin extends Login implements IFinalize
{	
	public function finalize()
	{
		$sql = "update login
			set password = '$this->password'
			where userId = '$this->userId'
			";
		$this->db->query($sql);	
	}
}