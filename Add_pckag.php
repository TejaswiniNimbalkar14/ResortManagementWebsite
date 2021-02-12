<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Star Resort</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/custom.js"></script>
<link href="assets/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
<?php include './slider_1.php'; ?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->

				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				

				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<!--<div class="main-page signup-page">-->
				<h2 class="title1">Personal Information :</h2>
				<div class="sign-up-row widget-shadow">
					<!--<h5>Personal Information :</h5>-->
                                        <form action="insertpackage.php" id="addNewDriver"  method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="DriverName">Package Name</label>
										
                                        <input type="text" class="form-control required" id="DriverName"  name="packagename" maxlength="128" required>
                                    </div>
                                    
                                </div>
<!--                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" class="form-control " id="driverEmail"  name="driverEmail"  maxlength="128">
                                    </div>
                                </div>-->
                            </div>
							<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="driverDOB">Cost</label>
                                        <input type="text" class="form-control required" id="driverDOB"  name="cost" maxlength="128">
                                    </div>
                                    
                                </div>
                                                             
<!--                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverLicense">Driver License </label>
                                        <input type="text" class="form-control required" id="driverLicense"   name="driverLicense" maxlength="128">
                                    </div>
                                </div>-->
                            </div><!--
-->                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverMobile">Category</label>
                                        <select class="form-control required digits" name="cat">
                                            <option value="Birthday Party">Birthday Party</option>
                                            <option value="Marriage">Marriage</option>
                                            <option value="Reception">Reception</option>
                                            <option value="Get-Together Party">Get-Together Party</option>
                                            <option value="Other">Other</option>
                                            
                                        </select>
                                        <!--<input type="text" class="form-control required digits" id="driverMobile" name="driverMobile" maxlength="10">-->
                                    </div>
                                </div>
<!--                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverAddress">Address</label>
                                        <input type="text" class="form-control required" id="driverAddress" name="driverAddress">
                                    </div>
                                </div>    -->
                            </div>
<!--<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="driverDOB">Image</label>
                                        <input type="file" class="form-control required" id="driverDOB"  name="cost" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverLicense">Driver License </label>
                                        <input type="text" class="form-control required" id="driverLicense"   name="driverLicense" maxlength="128">
                                    </div>
                                </div>
                            </div>-->

<!--
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverSalary">Driver Salary</label>
                                        <input type="text" class="form-control digits" id="driverSalary" name="driverSalary" maxlength="10" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       
                                        <label for="nonregulardriver" class="radio-lable">Non Regular Driver</label>
                                        <input type="text" class="form-control digits" id="nonregulardriver" name="nonregulardriver" >
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="driverDocument">Driver Document</label>               
                                        <input type="file" class="form-control" id="driverDocument" name="driverDocument">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>    
                            </div>-->
						
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
						
                         <?php 
						if(isset($_GET['driver_edit']))
						{
							 echo'<input type="submit" class="btn btn-primary" value="Update" />';
						}
						else
						{
							echo' <input type="submit" class="btn btn-primary" value="Submit" />';
						}
						?>
                           
                            <input type="reset" class="btn btn-default" value="Reset" />
                            
                        </div>
                    </form>

				</div>
			<!--</div>-->
		</div>
		<!--footer-->
		
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='assets/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="assets/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="assets/js/bootstrap.js"> </script>
	
</body>
</html>