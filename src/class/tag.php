<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));

class Tag implements IFinalize
{
	protected $db;
	protected $tagId;
	protected $postId;
	protected $taggingUserId;
	protected $taggedUserId;

	
	function __construct(IDatabase $db)
	{
		$this->db = $db;
	}
	public function setTag($postId,$userId,$taggedUserId)
	{
		$this->postId = $postId;
		$this->taggingUserId = $userId;
		$this->taggedUserId = $taggedUserId;
	}
	public function getPostId($postId)
	{
		$this->postId = $postId;
	}

	public function finalize()
	{
		
	}

}