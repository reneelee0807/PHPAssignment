<?php
require_once  (realpath(dirname(__FILE__) .'../../initialize/initialize.php'));
include_once(Class_PATH.'/post.php');

$deleteMessage = $_GET['id'];
$confirmed = '';




?>
<html>
<head>
	<title>Main Menu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css?ts=<?=time()?>&quot; ">
	<link rel="stylesheet" type="text/css" href="theme.css?ts=<?=time()?>&quot; "/>
	<link rel="stylesheet" type="text/css" href="../../<?php echo $community->getCssFile(); ?>"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="modal-dialog">
    		<div class="modal-content">
                <div class="modal-header">                      
                        <h4 class="modal-title"><?php echo $ini_array[$language]['Delete Post']?></h4>
                </div>
                <div class="modal-body container">
    				<p><?php echo $ini_array[$language]['Are you sure you want to delete the message?']?></p>
    			</div>
				<div class="modal-footer">
                <form action="../../src/function/deletePHP.php" method="POST">
                        <button class="btn btn-success" name="myDelete" value="<?php echo $deleteMessage ?>"  type='submit'><?php echo $ini_array[$language]['Yep']?></button> 
						<button class="btn btn-fail" name="cancel" value="<?php echo $deleteMessage ?>"  type='submit'><?php echo $ini_array[$language]['Nope']?></button> 
				</form>

                </div>
    		</div>
		</div>

</body>
</html>