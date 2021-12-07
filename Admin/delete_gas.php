<?php
    include('../connection.php');
    $query = "DELETE from gas_data where gas_id =$_GET[tid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=gas_data.php');
?>
