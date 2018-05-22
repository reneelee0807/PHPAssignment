<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/tag.php');
class NewTag extends Tag implements IFinalize
{	
	public function finalize()
	{
		$sql = "Insert into  Tag (postId, taggingUserId, taggedUserId)Values('$this->postId','$this->taggingUserId','$this->taggedUserId')";
		$result = $this->db->query($sql);
		return $result;
	}
}