<?php
interface ILogin
{
	function setLogin($userId,$password);
	function getUserId();
	function saveLogin();
	function getLogin();
	function updateLogin();
}