<?php
	include('../connection.php');

    move_uploaded_file($_FILES["gas_file"]["tmp_name"],"gas_file/" . $_FILES["gas_file"]["name"]);
	$file="gas_file/".$_FILES["gas_file"]["name"];

	$query = "insert into gas_data values(null,$_POST[a_id],'$_POST[gas_status]','$_POST[gas_name]','$_POST[gas_business_name]','$_POST[gas_contact]','$_POST[gas_date]',$_POST[gas_land_no],$_POST[gas_mobile],'$_POST[gas_busi_address]','$_POST[gas_post_code]','$_POST[gas_current]','$_POST[gas_s_charge]','$_POST[gas_unit_rate]','$_POST[gas_meter_point]','$_POST[gas_current_ref]','$_POST[gas_name_appear]','$_POST[gas_current_meter]','$_POST[gas_meter_serail]','$_POST[gas_last_bill]','$_POST[gas_supply_status]','$_POST[gas_property]','$_POST[gas_contract_term]','$_POST[gas_land_lord]','$_POST[gas_home_address]','$_POST[gas_bank_name]','$_POST[gas_account_title]','$_POST[gas_bank_address]','$_POST[gas_sort_code]','$_POST[gas_bank_accountn]','$_POST[gas_bill_payment]','$_POST[gas_a_q]','$_POST[gas_directors]','$_POST[gas_name_of_new]','$_POST[gas_directors_dob]','$_POST[gas_remarks]','$file')";
	$query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=gas_list.php');
?>
