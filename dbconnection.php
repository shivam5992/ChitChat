<?php
$dbc=@mysql_connect('localhost','root','')OR die('could not connect'. mysql_error());
mysql_select_db('ajaxchat')OR die('could not select database'.mysql_error());
?>
