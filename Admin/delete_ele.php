<?php
    include('../connection.php');
    $query = "DELETE from electricity_data where ele_id =$_GET[qid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=ele_data.php');
?>
