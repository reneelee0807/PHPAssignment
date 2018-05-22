<?php
interface ITag
{
	function setTag($postId,$userId,$taggedUserId);
	function getPostId($postId);
	function saveTag();
}