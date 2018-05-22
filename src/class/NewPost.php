<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
require_once  (Interface_PATH . DS . 'IFinalize.php'); 
include_once(Class_PATH.'/post.php');
class NewPost extends post implements IFinalize
{
	public function finalize()
	{
		$sql = "Insert into Post Values(Null,'$this->postTime','$this->userId','$this->postContent','$this->privacyOption')";
		$result = $this->db->query($sql);	
	}
}