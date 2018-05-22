<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));

abstract class Post 
{
	protected $db;
	protected $postTime;
	protected $userId;
	protected $postContent;
	protected $privacyOption;
	protected $postId;

	function __construct(IDatabase $db)
	{
		$this->db = $db;
	}
	public function setPost($postTime,$userId,$postContent,$privacyOption )
	{
		$this->postTime = $postTime;
		$this->userId = $userId;
		$this->postContent = $postContent;
		$this->privacyOption = $privacyOption;
	}
	public function getPostId($postId)
	{
		$sql = "select * from post where postId = '$postId' ";
		$result = $this->db->query($sql);
		$result = $result->fetch();
		$this->postId = $result['postId'];
	}
	
	public function getPostIdByUserIdAndPostTime($db,$userId,$postTime) : string
	{
		$sql = "select * from post 
		where userId = '$this->userId' and postTime = '$this->postTime'";
		$result = $this->db->query($sql);
		$result = $result->fetch();
		$result = $result['postId'];
		return $result;
	}
	public function getMyPost($db, $theUserID)
	{
		$sql = "select * FROM post LEFT OUTER JOIN tag on post.postId = tag.postId 
		where userId = '$theUserID'";

		$result = $db->query($sql);  
		return $result;
	}	
	public function getPost() 
	{
			return $this->postId;
	}	
	public function finalize()
	{
		
	}
	public function display($value)
	{
		
	}
	
	

}
