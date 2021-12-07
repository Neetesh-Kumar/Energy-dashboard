<?php
session_start();
include('../connection.php');
$gas_id = "";
$gas_name = "";
$gas_business_name = "";
$gas_contact="";
$gas_date="";
$gas_land_no="";
$gas_mobile="";
$gas_post_code="";
$gas_current="";
$gas_s_charge="";
$gas_unit_rate="";
$gas_meter_point="";
$gas_current_ref="";
$gas_name_appear="";
$gas_current_meter="";
$gas_meter_serail="";
$gas_last_bill="";
$gas_supply_status="";
$gas_property="";
$gas_contract_term="";
$gas_land_lord="";
$gas_home_address="";
$gas_bank_name="";
$gas_account_title="";
$gas_bank_address="";
$gas_sort_code="";
$gas_bank_accountn="";
$gas_bill_payment="";
$gas_a_q="";
$gas_directors="";
$gas_name_of_new="";
$gas_directors_dob="";
$gas_remarks="";
$gas_file="";
$query = "select * from gas_data  where gas_id = '$_GET[rid]'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $gas_id = $row['gas_id'];
    $gas_name = $row['gas_name'];
    $gas_business_name = $row['gas_business_name'];
    $gas_contact = $row['gas_contact'];
    $gas_date = $row['gas_date'];
    $gas_land_no = $row['gas_land_no'];
    $gas_mobile = $row['gas_mobile'];
    $gas_post_code = $row['gas_post_code'];
    $gas_current = $row['gas_current'];
    $gas_s_charge = $row['gas_s_charge'];
    $gas_unit_rate = $row['gas_unit_rate'];
    $gas_meter_point = $row['gas_meter_point'];
    $gas_current_ref = $row['gas_current_ref'];
    $gas_name_appear = $row['gas_name_appear'];
    $gas_current_meter = $row['gas_current_meter'];
    $gas_meter_serail = $row['gas_meter_serail'];
    $gas_last_bill = $row['gas_last_bill'];
    $gas_supply_status = $row['gas_supply_status'];
    $gas_property = $row['gas_property'];
    $gas_contract_term = $row['gas_contract_term'];
    $gas_land_lord = $row['gas_land_lord'];
    $gas_home_address = $row['gas_home_address'];
    $gas_bank_name = $row['gas_bank_name'];
    $gas_account_title = $row['gas_account_title'];
    $gas_bank_address = $row['gas_bank_address'];
    $gas_sort_code = $row['gas_sort_code'];
    $gas_bank_accountn = $row['gas_bank_accountn'];
    $gas_bill_payment = $row['gas_bill_payment'];
    $gas_a_q = $row['gas_a_q'];
    $gas_directors = $row['gas_directors'];
    $gas_name_of_new = $row['gas_name_of_new'];
    $gas_directors_dob = $row['gas_directors_dob'];
    $gas_remarks = $row['gas_remarks'];
    $gas_file = $row['gas_file'];

}

?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title> - Admin Dashboard</title>

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
		.hidden{
			display:none;
		}
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
			<div class="loader-logo text-center"><img src="vendors/images/LOADER.png" style="width:50%; height:70px;" class="" alt=""></div>
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
						<span class="user-name"><?php echo $_SESSION['name'];?></span>
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
			<a href="admin_dashboard.php">
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
						<a href="admin_dashboard.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-beach-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user1"></span><span class="mtext">Agent</span>
						</a>
						<ul class="submenu">
							<li><a href="add_agent.php">Add Agent </a></li>
							<li><a href="agent_list.php">All Agent Data</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list"></span><span class="mtext">Submited Sales</span>
						</a>
						<ul class="submenu">
							<li><a href="ele_data.php">Electricity Data</a></li>
							<li><a href="gas_data.php">Gas Data</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
    <div class="card-box pd-20 mb-30">
        <a href="" class='btn btn-info' onclick="printDiv('printArea')"><i class='dw dw-print'></i>Print Data</a>
    </div>
		<div class="xs-pd-20-10 pd-ltr-20">

        <div class="pd-20 card-box mb-30" id="printArea">
                        <div class="clearfix">
                            <h4 class="h4">Edit Gas Submitted Details</h4>
                        </div>
                        <div class="container text-secondary">
                                <form action="" class="hidden_div1" method="post" id="hidden_div1">
                                <div class="clearfix">
                                <h4 class="h4">Edit Gas Status</h4>
                                </div>
                                <!-- <legend>Contract Sheet</legend> -->
								<div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                        <label>Status</label>
                                            <select  class="form-control" name="gas_status" id="exampleFormControlSelect1" value="<?php echo $gas_status; ?>">
                                            <option value="0">Inprocess</option>
                                            <option value="1" >Live</option>
                                            <option  value="2">Objected</option>
                                            <option >Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <input type="text" name="ele_business_name" class="form-control" value="<?php echo $ele_business_name;?>"  >
                                        </div>
                                    </div> -->
                                </div>
								<div class="hidden">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Agent Name</label>
                                            <input type="text" name="gas_name" class="form-control" value="<?php echo $gas_name;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Business Name</label>
                                            <input type="text" name="gas_business_name" class="form-control" value="<?php echo $gas_business_name;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Contact Person Name</label>
                                            <input type="text" name="gas_contact" class="form-control"  value="<?php echo $gas_contact;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="gas_date" class="form-control" value="<?php echo $gas_date;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Land Line No</label>
                                            <input type="number" name="gas_land_no" class="form-control" value="<?php echo $gas_land_no;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Mobile_number</label>
                                            <input type="number" name="gas_mobile" class="form-control" value="<?php echo $gas_mobile;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>PostCode</label>
                                            <input type="number" name="gas_post_code" class="form-control" value="<?php echo $gas_post_code;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <legend>Gas Details</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1-Current Supplier</label>
                                            <input type="text" name="gas_current" class="form-control" value="<?php echo $gas_current;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                    <legend>2-Current Rates</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Standing Charge</label>
                                            <input type="text" name="gas_s_charge" class="form-control"  value="<?php echo $gas_s_charge;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Unit Rate</label>
                                            <input type="text" name="gas_unit_rate" class="form-control" value="<?php echo $gas_unit_rate;?>" readonly >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label>3-Meter Point Reference No.</label>
                                    <input type="text" name="gas_meter_point" class="form-control" value="<?php echo $gas_meter_point;?>" readonly >
                                </div>
                                </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>4-Current Ref No</label>
                                            <input type="text" name="gas_current_ref" class="form-control" value="<?php echo $gas_current_ref;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>5-NAME APPEAR ON BILL</label>
                                            <input type="text" name="gas_name_appear" class="form-control"  value="<?php echo $gas_name_appear;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>6-Current Meter Read</label>
                                            <input type="text" name="gas_current_meter" class="form-control"  value="<?php echo $gas_current_meter;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>7-Meter Serial No</label>
                                            <input type="text" name="gas_meter_serail" class="form-control" value="<?php echo $gas_meter_serail;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>8-Last Bill Amount</label>
                                            <input type="text" name="gas_last_bill" class="form-control" value="<?php echo $gas_last_bill;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>9-Supply Status</label>
                                            <input type="text" name="gas_supply_status" class="form-control" value="<?php echo $gas_supply_status;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <legend>Bank Details</legend>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Property</label>
                                            <input type="text" name="gas_property" class="form-control" value="<?php echo $gas_property;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Contract Term</label>
                                            <input type="text" name="gas_contract_term" class="form-control"   value="<?php echo $gas_contract_term;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Land Lord Name</label>
                                            <input type="text" name="gas_land_lord" class="form-control"  value="<?php echo $gas_land_lord;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Home Address</label>
                                            <input type="text" name="gas_home_address" class="form-control"  value="<?php echo $gas_home_address;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" name="gas_bank_name" class="form-control"  value="<?php echo $gas_bank_name;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Account Title</label>
                                            <input type="text" name="gas_account_title" class="form-control"  value="<?php echo $gas_account_title;?>" readonly >
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bank Address</label>
                                            <input type="text" name="gas_bank_address" class="form-control"  value="<?php echo $gas_bank_address;?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Sort Code</label>
                                            <input type="text" name="gas_sort_code" class="form-control"   value="<?php echo $gas_sort_code;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Account No</label>
                                            <input type="text" name="gas_bank_accountn" class="form-control"   value="<?php echo $gas_bank_accountn;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Bill Payment Method</label>
                                            <input type="text" name="gas_bill_payment" class="form-control"   value="<?php echo $gas_bill_payment;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>A Q</label>
                                            <input type="text" name="gas_a_q" class="form-control"  value="<?php echo $gas_a_q;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Directors Home Address</label>
                                            <input type="text" name="gas_directors" class="form-control"  value="<?php echo $gas_directors;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name Of New Customer</label>
                                            <input type="text" name="gas_name_of_new" class="form-control"  value="<?php echo $gas_name_of_new;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Directors DOB</label>
                                            <input type="text" name="gas_directors_dob" class="form-control"  value="<?php echo $gas_directors_dob;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="gas_remarks" class="form-control"  value="<?php echo $gas_remarks;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Attachement File</label>
                                            <a href="../Agent/<?php echo $gas_file;?>" target="blank"> <input type="select" name="gas_file" class="form-control"  value="<?php echo $gas_file;?>" readonly ></a>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <input type="text" name="gas_remarks" class="form-control"  value="<?php echo $gas_remarks;?>" readonly>
                                        </div>
                                    </div> -->
                                </div>
								</div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <input type="submit" class="btn btn-block btn-outline-primary" name="update" value="Update ">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js" integrity="sha512-D30F0yegJduD5FxOxI3qM1Z0YrbtXE3YLoyNDYvps4Qq63Y0l/ObPmjlsj27pgFx8mLdMQ24I3gGtdYZO741HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }

    </script>
 
</body>
</html>
<?php
	if(isset($_POST['update'])){
		include('../connection.php');
		$query = "update gas_data set gas_status = $_POST[gas_status] where gas_id = $_GET[rid]";
		$query_run = mysqli_query($connection,$query);
		// header("location:all_employee.php");
    echo "<script>location.href='gas_data.php'</script>";
	}
?>