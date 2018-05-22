<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
require_once  (Interface_PATH . DS . 'IDisplay.php');

class User 
{
	protected $db;
	protected $userId;
	protected $fName;
	protected $lName;
	protected $emailAddress;
	protected $dob;
	protected $gender;
	protected $location;
	
	public function __construct(IDatabase $db)
	{
		$this->db = $db;
	}
	public function setUser($userId,$fName,$lName,$emailAddress,$dob,$gender,$location)
	{
		$this->userId = $userId;
		$this->fName = $fName;
		$this->lName = $lName;
		$this->emailAddress = $emailAddress;
		$this->dob = $dob;
		$this->gender = $gender;
		$this->location = $location;
	}
	public function getUserId($userId)
	{
		$sql = "select * from user where userId = '$userId'";
		$result = $this->db->query($sql);
		$result = $result->fetch();
		$this->userId = $result['userId'];
		$this->fName = $result['fName'];
		$this->lName = $result['lName'];
		$this->emailAddress = $result['emailAddress'];
		$this->dob = $result['dob'];
		$this->gender = $result['gender'];
		$this->location = $result['location'];
		
	}
	public function getAUserId() 
	{
		return $this->userId;
	}
	public function getFName() : string
	{
		return $this->fName;
	}
	public function getLName() : string
	{
		return $this->lName;
	}
	public function getEmailAddress() : string
	{
		return $this->emailAddress;
	}
	public function getDob() : string
	{
		return $this->dob;
	}
	public function getGender() : string
	{
		return $this->gender;
	}
	public function getLocation() : string
	{
		return $this->location;
	}
	
	public function finalize()
	{
		
	}
	public function display($value)
	{

	}
}