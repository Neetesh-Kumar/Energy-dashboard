<?php
	include('../connection.php');

	$query = "insert into agent_data values(null,'$_POST[agent_id]','$_POST[agent_name]','$_POST[agent_email]','$_POST[agent_password]')";
	$query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=agent_list.php');
?>
