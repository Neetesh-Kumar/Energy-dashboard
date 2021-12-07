<?php
  function get_ele_count(){
    include('../connection.php');
    $ele_count = "";
    $query=" select count(*) as ele_count from electricity_data";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $ele_count = $row['ele_count'];

    }
    return ($ele_count);
}
function get_gas_count(){
    include('../connection.php');
    $gas_count = "";
    $query=" select count(*) as gas_count from gas_data";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $gas_count = $row['gas_count'];

    }
    return ($gas_count);
}
?>