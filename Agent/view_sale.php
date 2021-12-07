<?php
session_start();
include('../connection.php');
$ele_id = "";
$a_id="";
$ele_status="";
$ele_name = "";
$ele_business_name = "";
$ele_contact="";
$ele_date="";
$ele_land_no="";
$ele_mobile="";
$ele_busi_address="";
$ele_post_code="";
$ele_current="";
$sup_no1="";
$sup_no2="";
$sup_no3="";
$sup_no4="";
$sup_no5="";
$sup_no6="";
$sup_no7="";
$ele_s_charge="";
$ele_day="";
$ele_night="";
$ele_eve="";
$ele_current_ref="";
$ele_name_appear="";
$ele_current_meter="";
$ele_meter_serail="";
$ele_last_bill="";
$ele_supply_status="";
$ele_property="";
$ele_contract_term="";
$ele_land_lord="";
$ele_home_address="";
$ele_bank_name="";
$ele_account_title="";
$ele_bank_address="";
$ele_sort_code="";
$ele_bank_accountn="";
$ele_bill_payment="";
$ele_a_q="";
$ele_directors="";
$ele_name_of_new="";
$ele_directors_dob="";
$ele_remarks="";
$ele_file="";
$query = "select * from electricity_data  where ele_id = '$_GET[cid]'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
$ele_id = $row['ele_id'];
$ele_name = $row['ele_name'];
$ele_business_name = $row['ele_business_name'];
$ele_contact = $row['ele_contact'];
$ele_date = $row['ele_date'];
$ele_land_no = $row['ele_land_no'];
$ele_mobile = $row['ele_mobile'];
$ele_busi_address = $row['ele_busi_address'];
$ele_post_code = $row['ele_post_code'];
$ele_current = $row['ele_current'];
$sup_no1 = $row['sup_no1'];
$sup_no2 = $row['sup_no2'];
$sup_no3 = $row['sup_no3'];
$sup_no4 = $row['sup_no4'];
$sup_no5 = $row['sup_no5'];
$sup_no6 = $row['sup_no6'];
$sup_no7 = $row['sup_no7'];
$ele_s_charge = $row['ele_s_charge'];
$ele_day = $row['ele_day'];
$ele_night = $row['ele_night'];
$ele_eve = $row['ele_eve'];
$ele_current_ref = $row['ele_current_ref'];
$ele_name_appear = $row['ele_name_appear'];
$ele_current_meter = $row['ele_current_meter'];
$ele_meter_serail = $row['ele_meter_serail'];
$ele_last_bill = $row['ele_last_bill'];
$ele_supply_status = $row['ele_supply_status'];
$ele_property = $row['ele_property'];
$ele_contract_term = $row['ele_contract_term'];
$ele_land_lord = $row['ele_land_lord'];
$ele_home_address = $row['ele_home_address'];
$ele_bank_name = $row['ele_bank_name'];
$ele_account_title = $row['ele_account_title'];
$ele_bank_address = $row['ele_bank_address'];
$ele_sort_code = $row['ele_sort_code'];
$ele_bank_accountn = $row['ele_bank_accountn'];
$ele_bill_payment = $row['ele_bill_payment'];
$ele_a_q = $row['ele_a_q'];
$ele_directors = $row['ele_directors'];
$ele_name_of_new = $row['ele_name_of_new'];
$ele_directors_dob = $row['ele_directors_dob'];
$ele_remarks = $row['ele_remarks'];
$ele_file = $row['ele_file'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title> - Agent Dashboard</title>

	<!-- Site favicon -->
    <link rel="icon" sizes="180x180" href="vendors/images/180 by 180.png">
	<link rel="icon" type="image/ico" sizes="32x32" href="vendors/images/elextrify logo 32by32 001-01.png">
	<link rel="icon" type="image/ico" sizes="16x16" href="vendors/images/elextrify logo [Recovered]-01.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>
				::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			background-color: #F5F5F5;
			border-radius: 10px;
		}

		::-webkit-scrollbar
		{
			width: 15px;
			background-color: #F5F5F5;
		}

		::-webkit-scrollbar-thumb
		{
			background-color: #AAA;
			border-radius: 10px;
			background-image: -webkit-linear-gradient(90deg,
							rgba(0, 0, 0, .2) 25%,
							transparent 25%,
							transparent 50%,
							rgba(0, 0, 0, .2) 50%,
							rgba(0, 0, 0, .2) 75%,
							transparent 75%,
							transparent)
		}


		th::before,th::after{
			color: #ff9100 !important;
		}
		.page-item.active .page-link{
				background-color: #ff9100 !important;
				border-color: #ff9100 !important;
			}
	</style>
</head>
<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo text-center"><img src="vendors/images/sliderr.png" style="width:50%; height:70px;" class="" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
		

			<div class="user-info-dropdown my-auto">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-name"><?php echo $_SESSION['agent_name'];?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="agent_dashboard.php">
			<img src="vendors/images/logo@4x.png" alt="" class="dark-logo" style="height:60px;">
				<img src="vendors/images/logo@4x.png" alt="" class="light-logo" style="height:60px;">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
			<ul id="accordion-menu">
					<li>
						<a href="agent_dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-beach-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user1"></span><span class="mtext">New Sale</span>
						</a>
						<ul class="submenu">
							<li><a href="add_data.php">Add Sale </a></li>
                            <li><a href="sale_list.php">Electricity Submited Status</a></li>
                            <li><a href="gas_list.php">Gas Submited Status</a></li>
						</ul>
					</li>
					<!-- <li>
						<a href="reg_list.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list"></span><span class="mtext">Submited Sales</span>
						</a>
					</li> -->
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">

        <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <h4 class="h4">View Sale Electricity Details</h4>
                        </div>
                        <div class="container text-secondary">
                        
                                
                                <!-- <div class="row">
									<div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Meter Type</label>

                                            <select id="myselect" class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>-Please Select</option>
                                            <option value="1" >Electricity</option>
                                            <option value="2">Gas</option>

                                            </select>
                                        </div>
                                        </div>
                                    </div>	

                                </div> -->
                                <form action="sale_list.php" class="hidden_child" method="post" id="hidden_div">
                                <div class="clearfix">
                                <h4 class="h4">Electricity Details</h4>
                                </div>
                                <legend>Contract Sheet</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Agent Name</label>
                                            <input type="text" name="ele_name" class="form-control" value="<?php echo $ele_name;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <input type="text" name="ele_business_name" class="form-control" value="<?php echo $ele_business_name;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Contact Person Name</label>
                                            <input type="text" name="ele_contact" class="form-control"  value="<?php echo $ele_contact;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="ele_date" class="form-control" value="<?php echo $ele_date;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Land Line No</label>
                                            <input type="number" name="ele_land_no" class="form-control" value="<?php echo $ele_land_no;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Mobile_number</label>
                                            <input type="number" name="ele_mobile" class="form-control" value="<?php echo $ele_mobile;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <di class="row">
                                <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Business Address</label>
                                            <input type="text" name="ele_post_code" class="form-control" value="<?php echo $ele_busi_address;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>PostCode</label>
                                            <input type="text" name="ele_post_code" class="form-control" value="<?php echo $ele_post_code;?>" readonly>
                                        </div>
                                    </div>

                                </div>
                                <legend>Electricity Details</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1-Current Supplier</label>
                                            <input type="text" name="ele_current" class="form-control"  value="<?php echo $ele_current;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2-Supply No</label>
                                            <div class="row ">
                                                <div class="col-md-3">
                                                    <input type="text" name="sup_no1" id="" class="form-control" value="<?php echo $sup_no1;?>" readonly>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="sup_no2" id="" class="form-control" value="<?php echo $sup_no2;?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="sup_no3" id="" class="form-control" value="<?php echo $sup_no3;?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-3">
                                                    <input type="text" name="sup_no4" id="" class="form-control" value="<?php echo $sup_no4;?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="sup_no5" id="" class="form-control" value="<?php echo $sup_no5;?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                        <input type="text" name="sup_no6" id="" class="form-control" value="<?php echo $sup_no6;?>" readonly>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="sup_no7" id="" class="form-control" value="<?php echo $sup_no7;?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <legend>3-Current Rates</legend>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>S.Charge</label>
                                            <input type="text" name="ele_s_charge" class="form-control" value="<?php echo $ele_s_charge;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Day</label>
                                            <input type="text" name="ele_day" class="form-control" value="<?php echo $ele_day;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Night</label>
                                            <input type="text" name="ele_night" class="form-control"  value="<?php echo $ele_night;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>EVE/W.End</label>
                                            <input type="text" name="ele_eve" class="form-control" value="<?php echo $ele_eve;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>4-Current Ref No</label>
                                            <input type="text" name="ele_current_ref" class="form-control" value="<?php echo $ele_current_ref;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>5-NAME APPEAR ON BILL</label>
                                            <input type="text" name="ele_name_appear" class="form-control" value="<?php echo $ele_name_appear;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>6-Current Meter Read</label>
                                            <input type="text" name="ele_current_meter" class="form-control"  value="<?php echo $ele_current_meter;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>7-Meter Serial No</label>
                                            <input type="text" name="ele_meter_serail" class="form-control" value="<?php echo $ele_meter_serail;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>8-Last Bill Amount</label>
                                            <input type="text" name="ele_last_bill" class="form-control" value="<?php echo $ele_last_bill;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>9-Supply Status</label>
                                            <input type="text" name="ele_supply_status" class="form-control" value="<?php echo $ele_supply_status;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <legend>Bank Details</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Property</label>
                                            <input type="text" name="ele_property" class="form-control" value="<?php echo $ele_property;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Contract Term</label>
                                            <input type="text" name="ele_contract_term" class="form-control" value="<?php echo $ele_contract_term;?>" readonly  >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Land Lord Name</label>
                                            <input type="text" name="ele_land_lord" class="form-control" value="<?php echo $ele_land_lord;?>" readonly  >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Home Address</label>
                                            <input type="text" name="ele_home_address" class="form-control" value="<?php echo $ele_home_address;?>" readonly  >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" name="ele_bank_name" class="form-control" value="<?php echo $ele_bank_name;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Account Title</label>
                                            <input type="text" name="ele_account_title" class="form-control" value="<?php echo $ele_account_title;?>" readonly  >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bank Address</label>
                                            <input type="text" name="ele_bank_address" class="form-control"  value="<?php echo $ele_bank_address;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Sort Code</label>
                                            <input type="text" name="ele_sort_code" class="form-control"  value="<?php echo $ele_sort_code;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Account No</label>
                                            <input type="text" name="ele_bank_accountn" class="form-control"  value="<?php echo $ele_bank_accountn;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Bill Payment Method</label>
                                            <input type="text" name="ele_bill_payment" class="form-control"  value="<?php echo $ele_bill_payment;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>A Q</label>
                                            <input type="text" name="ele_a_q" class="form-control"  value="<?php echo $ele_a_q;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Directors Home Address</label>
                                            <input type="text" name="ele_directors" class="form-control"  value="<?php echo $ele_directors;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name Of New Customer</label>
                                            <input type="text" name="ele_name_of_new" class="form-control"  value="<?php echo $ele_name_of_new;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Directors DOB</label>
                                            <input type="text" name="ele_directors_dob" class="form-control"  value="<?php echo $ele_directors_dob;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="ele_remarks" class="form-control"  value="<?php echo $ele_remarks;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Attachment File</label>
                                            <input type="text" name="ele_file" class="form-control"  value="<?php echo $ele_file;?>"  >
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="submit" class="btn btn-block btn-outline-danger" name="" value="Back ">
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>   




		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="vendors/scripts/dashboard2.js"></script>
	<!-- for datatable -->
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>


 
</body>
</html>