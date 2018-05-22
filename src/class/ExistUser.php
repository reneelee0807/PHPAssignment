<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/User.php');
class ExistUser extends User implements IFinalize, IDisplay
{
	public function finalize()
	{
		$sql = "update user
			set fName = '$this->fName',
			lName = '$this->lName',
			emailAddress = '$this->emailAddress',
			dob = '$this->dob',
			gender = '$this->gender',
			location = '$this->location'
			where userId = '$this->userId'
			";
		$result = $this->db->query($sql);
	}
	public function display($value)
	{
		echo '<h1 style="color:blue; font-size: 2.5em;" >';
		echo $value;
		echo'<h1>';
	}
}