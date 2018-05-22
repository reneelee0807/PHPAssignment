<?php
function getUser($db)
{
    $sql = "select * from user order by userId";
    $result = $db->query($sql);  
    echo "there were " . $result->size() . " rows <br />";
    return $result;
}

function getLogin($db)
{
    $sql = "select * from login order by userId";
    $result = $db->query($sql);  
    return $result;
}

function getAUser($db, $userId)
{
   $sql = "select * from user where userId = '$userId'";
   $result = $db->query($sql);  
    return $result; 
}

function getUserID($db, $theUserId, $thePassword)
   {		
        $sql = "select * from login where userId = '$theUserId' ";
		$result = $db->query($sql);
		$result = $result->fetch();
		$hashed_password = $result['password'];
		//var_dump($hashed_password);
		
	if(password_verify($thePassword, $hashed_password))
	{
	return $user = $result['userId'];
	}
	else
	{
		echo 'wrong combination';
	}
    //return $user;
   }
function displayLogin($logins)
{
    echo '<table border=1><tr><td>User ID</td><td>Password</td></tr>';
    while ( $aRow =  $logins->fetch() )
    {
        $outputLine = "<tr><td>$aRow[userId]</td>";
        $outputLine .= "<td>$aRow[password]</td>";
        echo $outputLine;
    }
    echo '</table>';
}  
function addAUser($db,$theUserId,$fName,$lName,$emailAddress,$dob,$gender,$location)
{
	$sql = "insert into user values ('$theUserId', '$fName', '$lName', '$emailAddress', '$dob', '$gender','$location' )";
	$result = $db->query($sql);
	return $result;
	echo '<b>a new user has been added to the database';
}

function addALogin($db,$theUserId,$password)
{
	$sql = "insert into login values ('$theUserId', '$password' )";
	$result = $db->query($sql);
	return $result;
	echo '<b>a new user with password has been added to the database';
}

function getPost($db, $myname)
{
	$sql = "select * FROM post LEFT OUTER JOIN tag on post.postId = tag.postId where userId = '$myname'";

	$result = $db->query($sql);  
	return $result;
}
function getAllPost($db, $search)
{
	$sql = "select * from post where postContent LIKE '%$search%'";
	$result = $db->query($sql);  
	return $result;
}
function getPostCount($db, $userId)
{
	$sql = "select count(postId) from post where userId = '$userId'";
	$result = $db->query($sql);  
	return $result;

}

/* function getPostId($db, $myname)
{
		$sql = "select postId from post left outer join tag on post.postId = tag.postId where userId = '$myname'";
	
		$result = $db->query($sql);  
		echo "there were " . $result->size() . " rows <br />";
		return $result;
} */
function displaySearchPost($allPosts)
{
	echo '<table class = "table  table-striped" >';
    while ( $aRow =  $allPosts->fetch() )
    {
        $outputLine = "<tr><td>$aRow[userId]</td>";

        $outputLine .= "<td>$aRow[postContent]</td>";
		$outputLine .= "<td>$aRow[postTime]</td>";
		echo $outputLine;
    }
    echo '</table>';
}
/* function displayPost($posts)
{
	echo '
		<table class = "table  table-striped" >
		';
    while ( $aRow =  $posts->fetch() )
    {
        $outputLine = "<tr><td>$aRow[userId]</td>";
		$outputLine .= "<td>$aRow[taggedUserId]</td>";
        $outputLine .= "<td>$aRow[postContent]</td>";
		$outputLine .= "<td>$aRow[postTime]</td>";	
		$outputLine .= "<td><a href='delete.php?id=$aRow[postId]' class='btn pull-right' data-toggle='modal'><span class='glyphicon glyphicon-remove'></a></td></tr>";
		echo $outputLine;
		var_dump($aRow['postId']);
    }
    echo '</table>';
} */
function getPostId($db,$userId,$postTime)
{
	$sql = "select * from post where userId = '$userId' and postTime = '$postTime'";
    $result = $db->query($sql);
    $result = $result->fetch();
    $result = $result['postId'];
    return $result;
}

function addAPost($db,$postTime,$userId,$postContent,$privacyOption)
{
	$sql = "Insert into  Post (postTime,userId,postContent,PrivacyOption) Values('$postTime','$userId','$postContent','$privacyOption')";
	$result = $db->query($sql);
	return $result;
	echo '<b>a new post has been added to the database';
}

function addATag($db,$postId,$userId,$taggedUserId)
{
	$sql = "Insert into  Tag (postId, taggingUserId, taggedUserId)Values('$postId','$userId','$taggedUserId')";
	$result = $db->query($sql);
	return $result;
	echo '<b>a new tag has been added to the database';
} 

function updatePassword($db,$theUserId, $hashed_password1)
{
	$sql = "update login
			set password = '$hashed_password1'
			where userId = '$theUserId'
			";
	$result = $db->query($sql);
	return $result;
	echo "You have successfully changed your password.";
}

function getUserInfo($db, $userId)
{
   $sql = "select * from user where userId = '$userId'";
   $result = $db->query($sql);  
    return $result; 
}
function updateUserInfo( $db,$theUserId, $fName,$lName,$emailAddress,$dob,$gender,$location)
{
	$sql = "update user
			set fName = '$fName',
			lName = '$lName',
			emailAddress = '$emailAddress',
			dob = '$dob',
			gender = '$gender',
			location = '$location'
			where userId = '$theUserId'
			";
	$result = $db->query($sql);
	return $result; 
	echo "You have successfully changed your password.";
}


function deletePost($db, $postId)
{
	
	$sql = "DELETE FROM post WHERE postId='$postId'";
	$result = $db->query($sql);
	echo "Record deleted successfully";
}




?>