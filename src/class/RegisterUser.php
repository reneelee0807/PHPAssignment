<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
require_once  (Interface_PATH . DS . 'IFinalize.php'); 
include_once(Class_PATH.'/User.php');
class RegisterUser extends User implements IFinalize
{
	public function finalize()
	{
		$sql = "insert into user values ('$this->userId', '$this->fName', '$this->lName',
		'$this->emailAddress', '$this->dob', '$this->gender','$this->location' )";
		$result = $this->db->query($sql);

	}
}