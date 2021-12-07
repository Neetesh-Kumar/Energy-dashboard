<?php
	include('../connection.php');
	move_uploaded_file($_FILES["ele_file"]["tmp_name"],"ele_file/" . $_FILES["ele_file"]["name"]);
	$file="ele_file/".$_FILES["ele_file"]["name"];

	$query = "insert into electricity_data values(null,$_POST[a_id],'$_POST[ele_status]','$_POST[ele_name]','$_POST[ele_business_name]','$_POST[ele_contact]','$_POST[ele_date]',$_POST[ele_land_no],$_POST[ele_mobile],'$_POST[ele_busi_address]','$_POST[ele_post_code]','$_POST[ele_current]',$_POST[sup_no1],$_POST[sup_no2],$_POST[sup_no3],$_POST[sup_no4],$_POST[sup_no5],$_POST[sup_no6],$_POST[sup_no7],'$_POST[ele_s_charge]','$_POST[ele_day]','$_POST[ele_night]','$_POST[ele_eve]','$_POST[ele_current_ref]','$_POST[ele_name_appear]','$_POST[ele_current_meter]','$_POST[ele_meter_serail]','$_POST[ele_last_bill]','$_POST[ele_supply_status]','$_POST[ele_property]','$_POST[ele_contract_term]','$_POST[ele_land_lord]','$_POST[ele_home_address]','$_POST[ele_bank_name]','$_POST[ele_account_title]','$_POST[ele_bank_address]','$_POST[ele_sort_code]','$_POST[ele_bank_accountn]','$_POST[ele_bill_payment]','$_POST[ele_a_q]','$_POST[ele_directors]','$_POST[ele_name_of_new]','$_POST[ele_directors_dob]','$_POST[ele_remarks]','$file')";
	$query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=sale_list.php');
?>
