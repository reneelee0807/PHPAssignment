<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
class Community
{
	private $db;
	private $communityName;
    private $description;
	private $title;
    private $cssFile;
    private $logo;
    
	public function __construct($db, $community)
    {
        $this->db = $db;
		$this->setCommunity($community);
    }
	
	public function setCommunity($community)
    {
        $sql = "select * from community where communityName = '$community'";
        $result = $this->db->query($sql);
        $result = $result->fetch();
		$this->communityName = $result['communityName'];
		$this->description = $result['description'];
		$this->title = $result['title'];
        $this->cssFile = $result['cssFile'];       
        $this->logo = $result['logo'];
    }
	
	public function getCommunityName()
	{
		return $this->communityName;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getCssFile()
	{
		return $this->cssFile;
	}
	public function getLogo()
	{
		return $this->logo;
	}
}