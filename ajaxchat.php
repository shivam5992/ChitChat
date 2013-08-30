<?php

/**
 * Copyright information
 * @author Shivam Bansal <shivam5992@gmail.com>
 * @copyright Copyright (c) 2013, Shivam Bansal
 * @version 1.0 
 */
 
require 'init.php';
if(isset($_POST['method']) === true && empty($_POST['method']) === false){
	$chat = new Chat();
	$method = trim($_POST['method']);
	if($method === 'fetch')
	{
		$messages = $chat->fetchMessages();
		if(empty($messages) === true){
		echo 'No Messages !!!!';
		}
		else{
		foreach ($messages as $message){
		?>
		<div class="message" align="left" >
		<a href=#>
		<?php echo $message['UserName']; ?></a> &nbsp;<font color="gray">:</font>&nbsp;				
		<?php echo nl2br($message['message']); ?>
		</div>
		<?php
		}
		}
	}
	else if($method === 'throw' && isset($_POST['message']) === true){
		$message = trim($_POST['message']);
		if(empty($message) === false){
		$chat->throwMessage($_SESSION['user'],$message);
		}
}
}
?>
