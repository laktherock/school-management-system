<!DOCTYPE html>
<html>
<head>
	<title>Welcome to SMS</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/logincss.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<img src="<?php echo base_url();?>/images/4.png" alt="school" class="img"/>
		<p class="head"> Get Ready to go Yes schools.com</p>
		<p class="sub-head"> Get your tickets here</p>
		<form method="POST">
			<input type="text" name="email" id="email" placeholder="Email address" value="<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>" /><br />
			<span style="color:red;"><?php echo form_error('email'); ?></span>
			<input type="text" name="password" id="password" placeholder="Password" value="<?php if(!empty($_POST['password'])){echo $_POST['password'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('password'); ?></span>
			<input type="submit" name="submit" value="Login" />
		</form>
		<div id="regi">
			New user can register here <a href="<?php echo base_url();?>index.php/school/register "> Register here </a> 
		</div>		
	</div>
</body>
</html>