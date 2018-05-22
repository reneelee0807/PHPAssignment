<?php
interface IUser
{
	function setUser($userId,$fName,$lName,$emailAddress,$dob,$gender,$location);
	function getUserId($userId);
	function getAUserId();
	function getFName();
	function getLName();
	function getEmailAddress();
	function getDob();
	function getGender();
	function getLocation();
	function saveUser();
	function updateUserInfo();
}

?>