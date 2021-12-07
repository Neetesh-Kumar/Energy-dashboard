<?php
    include('../connection.php');
    $query = "DELETE from agent_data where a_id =$_GET[did]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=agent_list.php');
?>
