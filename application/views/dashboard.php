<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/dashboardcss.css" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.1.min.js"></script>
</head>
<body>
	<?php include('header.php'); ?>

		<div id="section" style="margin-top:60px">
			<div class="row">
	   				<div class="col-md-4 col-md-offset-2">
	   				 	<div class="att_div">
							<div class="reg_head">
								<i class="fa fa-check-circle fa-5x" style="padding: 12px;"></i>
								<h2><a href="<?php echo base_url();?>index.php/selectclass"  style="text-decoration: none;color: black;">Attendance Register</a></h2>
							</div>
								<div class="reg_cont">This above link redirects to the page to put number of persons in yes schools are present.</div>
							
						</div>
					</div>
					<div class="col-md-4 col-md-offset-1">
						<div class="att_div">	
							<div class="reg_head">
								<i class="fa fa-graduation-cap fa-5x" style="padding: 12px;"></i>
									<h2><a href="<?php echo base_url();?>index.php/school/marks" style="text-decoration: none;color: black;">Assesement Records</a></h2>
							</div>
									<div class="reg_cont"> Student in the yes schools are very good in academics.Lets see how much they scored by clicking this link</p></div>
							
						</div>
					</div>
				</div>	
				<div class="row">
				    <div class="col-md-6 col-md-offset-3">	
				    	<div class="st_div">
							<div class="reg_head">
								<i class="fa fa-info-circle fa-5x" style="padding: 12px;"></i>
									<h2><a href="<?php echo base_url();?>index.php/school/finalview" style="text-decoration: none;color: black;">Student Details</a></h2>
							</div>
								<div class="reg_cont"> Want to examine a student.Do u need see their performance in yes schools. then enter here</p></div>
						</div>	
					</div>
			</div>
		</div>
	

</body>
</html>