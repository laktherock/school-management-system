<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
body{
	margin: 0px;
	padding: 0px;
	font-family: "Roboto",sans-serif;	
}
#header{
	width: 100%;
	background-color: darkslategray;
	padding: 10px;
	font-size: 21px;
}
.img{
	width: 80px;
	height: 80px;
	margin-left: 40px;
}
.nav{
	position: absolute;
    right: 560px;
    top: 41px;
}
.nav ul{
	list-style: none;
	
}
.nav ul li{
	color: white;
	float: left;
	padding: 12px;
}
.nav ul li a:hover{
	color: black;
}
.nav ul li a{
	text-decoration: none;
	color: white;
}
#right{
	color: white;
	float: right;
	position: absolute;
	right: 25px;
    top: 73px;
}

</style>	
<link href='https://fonts.googleapis.com/css?family=Roboto:300,300' rel='stylesheet' type='text/css'>
</head>
<body>
 <div id="header">
 	<div class="logo"><img src="<?php echo base_url();?>/images/1.png" alt="school" class="img" /></div>
	 	<div class="nav">
		 	<ul>
		 		<li><a href="#">Home</a></li>
		 		<li><a href="<?php echo base_url();?>index.php/school/selectclass">Attendance</a></li>
		 		<li><a href="<?php echo base_url();?>index.php/school/marks">Assesement</a></li>
		 		<li><a href="<?php echo base_url();?>index.php/school/finalview">Details</a></li>
		 	</ul>
		 </div>	
		 <div id="right">Welcome <?php if(!empty($this->session->userdata('logged_in')['name'])){
		 	print_r($this->session->userdata('logged_in')['name']);}?></div>
	 </div>

</div>
</body>
</html>