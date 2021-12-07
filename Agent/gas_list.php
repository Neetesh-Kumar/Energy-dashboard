<?php
session_start();

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

        <div class="card-box mb-30 p-5">
				<div class="pd-20">
					<div class="row">
						<div class="col-md-6">
							<h4 class="text-blue h4">Gas Submitted List</h4>
						</div>
						<div class="col-md-6">
                        <a type="button" class="btn float-right text-white" data-bgcolor="#00b489" href="add_data.php"><i class="fa fa-plus"></i> Add Agent</a>
						</div>
	
					</div>
				</div>
				<div class="pb-20">
					<table class="table hover data-table-export nowrap table-bordered">
						<thead>
							<tr>
								<th>Agent Name</th>
								<th class="table-plus datatable-nosort">Business Name</th>
                                <th class="table-plus datatable-nosort">Status</th>
								<!-- <th>Contact Person Name</th> -->
                                
								<!-- <th>Date</th>
                                <th>Land Line No</th> -->
                                <th>Mobile_number</th>
                                <!-- <th>PostCode</th> -->
                                <th>Current Supplier</th>
                                <!-- <th nowrap>Current Rate</th>
                                <th>Meter Point  Ref</th>
                                <th>Current Ref No</th>
                                <th>NAME APPEAR ON BILL</th>
                                <th>Current Meter Read</th>
                                <th>Meter Serial No</th>
                                <th>Last Bill Amount</th>
                                <th>Supply Status</th>
                                <th>Property</th>
                                <th>Contract Term</th>
                                <th>Land Lord Name</th>
                                <th>Home Address</th>
                                <th>Bank Name</th>
                                <th>Account Title</th>
                                <th>Bank Address</th>
                                <th>Sort Code</th>
                                <th>Account No</th>
                                <th>Bill Payment Method</th>
                                <th>A Q</th>
                                <th>Directors Home Address</th>
                                <th>Name Of New Customer</th>
                                <th>Directors DOB</th>
                                <th>Remarks</th> -->
								<th>File</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                           include('../connection.php');
                            $gas_id = "";
                            $a_id = "";
                            $gas_status = "";
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
                            $query = "SELECT * from gas_data where a_id='$_SESSION[a_id]' ";
                                $query_run = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $gas_id = $row['gas_id'];
                                    $a_id = $row['a_id'];
                                    $gas_status = $row['gas_status'];
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

                        ?>
							<tr>
								<td><?php echo $gas_name;?></td>
								<td><?php echo $gas_business_name;?></td>
                                <td>
                                    <?php
                              if($row['gas_status']==0){
                                echo'<P><button class="btn btn-success"     width: 131px; style=" color:black;">Inprocess</button><P>';
                               
                              }else if($row['gas_status']==1){
                                echo'<P><button class="btn "     width: 131px; style="background-color:yellow; color:black;">Live</button><P>';
                              }
                              else if($row['gas_status']==2){
                                echo'<P><button class="btn "     width: 131px; style="background-color:orange; color:black;">Objected</button><P>';
                              }

                              else{
                                echo'<P><button class="btn btn-danger"     width: 131px;>Rejected</button><P>';
                              }
                           ?>  
                            
                            </td>
								<!-- <td><?php echo $gas_contact;?></td> -->
								<!-- <td><?php echo $gas_date;?></td>
                                <td><?php echo $gas_land_no;?></td> -->
                                <td><?php echo $gas_mobile;?></td>
                                <!-- <td><?php echo $gas_post_code;?></td> --> 
                                <td><?php echo $gas_current;?></td>
                                <!-- <td nowrap><div class="row">
                                    <div class="col-md-6">
                                        <?php echo $gas_s_charge?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $gas_unit_rate?>
                                    </div>
                                    
                                    </div>
                                </td>
                                <td><?php echo $gas_meter_point;?></td>
                                <td><?php echo $gas_current_ref;?></td>
                                <td><?php echo $gas_name_appear;?></td>
                                <td><?php echo $gas_current_meter;?></td>
                                <td><?php echo $gas_meter_serail;?></td>
                                <td><?php echo $gas_last_bill;?></td>
                                <td><?php echo $gas_supply_status;?></td>
                                <td><?php echo $gas_property;?></td>
                                <td><?php echo $gas_contract_term;?></td>
                                <td><?php echo $gas_land_lord;?></td>
                                <td><?php echo $gas_home_address;?></td>
                                <td><?php echo $gas_bank_name;?></td>
                                <td><?php echo $gas_account_title;?></td>
                                <td><?php echo $gas_bank_address;?></td>
                                <td><?php echo $gas_sort_code;?></td>
                                <td><?php echo $gas_bank_accountn;?></td>
                                <td><?php echo $gas_bill_payment;?></td>
                                <td><?php echo $gas_a_q;?></td>
                                <td><?php echo $gas_directors;?></td>
                                <td><?php echo $gas_name_of_new;?></td>
                                <td><?php echo $gas_directors_dob;?></td>
                                <td><?php echo $gas_remarks;?></td> -->
								<td><?php echo $gas_file;?></td>

								
								<td>
								<a href="view_gas.php?gid=<?php echo $row['gas_id'];?>" class="text-orange" title="Edit"  style="text-decoration: none;"><i class="fa fa-lg fa-pencil" aria-hidden="true"></i></a>
								<a href="<?php echo $row['gas_file'];?>" class="dowload" title="download"  style="text-decoration: none;color: orange;" download><i class="fa fa-lg fa-download" aria-hidden="true"></i></a>  
							</td>
                        	</tr>
                        <?php
                                }
                         ?>       
						</tbody>
					</table>
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