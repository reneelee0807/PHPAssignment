<?php
declare(strict_types =1) ;
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/post.php');
class ExistPost extends Post implements IFinalize, IDisplay
{
	public function finalize()
	{
		$sql = "DELETE FROM post WHERE postId='$this->postId'";
		$this->db->query($sql);
	}
	public function display($value)
	{
		$outputLine = '<table class = "table  table-striped" >';
			
		while ( $aRow =  $value->fetch() )
		{
			$outputLine .= "<tr><td>$aRow[userId]</td>";
			$outputLine .= "<td>$aRow[taggedUserId]</td>";
			$outputLine .= "<td>$aRow[postContent]</td>";
			$outputLine .= "<td>$aRow[postTime]</td>";	
			$outputLine .= "<td><a href='delete.php?id=$aRow[postId]' class='btn pull-right' data-toggle='modal'>
			<span class='glyphicon glyphicon-remove'></a></td></tr>";		
		}
		$outputLine .= '</table>';
		echo $outputLine;

	}
	
}