<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/login.php');
class NewLogin extends Login implements IFinalize
{
	public function finalize()
	{
		$sql = "insert into login values ('$this->userId', '$this->hashed_password')";
		$result = $this->db->query($sql);
	}
}