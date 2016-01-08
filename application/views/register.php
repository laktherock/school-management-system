<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/registercss.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		
		<img src="<?php echo base_url();?>/images/2.png" alt="school" class="img"/>
		<p class="head"> Almost there ! Welcome to Yes schools.com</p>
		<p class="sub-head"> A Few steps more...</p>

		<form method="POST">
			
			<input type="text" name="name" id="name" placeholder="Enter your full name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('name'); ?></span>
			<input type="text" name="age" id="age" placeholder="Enter your age" value="<?php if(!empty($_POST['age'])){echo $_POST['age'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('age'); ?></span>
			<input type="text" name="email" id="email" placeholder="Email address" value="<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('email'); ?></span>
			<input type="text" name="password" id="password" placeholder="Password" value="<?php if(!empty($_POST['password'])){echo $_POST['password'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('password'); ?></span>
			<input type="text" name="conf_password" id="conf_password" placeholder="Confirm Password" value="<?php if(!empty($_POST['conf_password'])){echo $_POST['conf_password'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('conf_password'); ?></span>
			<div style="width:80%; margin-left:6px; padding: 10px;">
			Gender
			<label class="radio-inline" style="margin-left:15px;"><input type="radio" name="radio" value="male" <?php if(!empty($_POST['radio']))if($_POST['radio']=='male') {echo 'checked';}?>>Male</label>
			<label class="radio-inline"><input type="radio" name="radio" value="female" <?php if(!empty($_POST['radio']))if($_POST['radio']=='female') {echo 'checked';}?>>Female</label>
			</div>
			<!--<div id="weight">Gender:<input type="radio"  name="radio" id="radio" value="male" />Male
			<input type="radio" name="radio" id="radio"  value="female" />Female<br /></div>-->
			<span style="color:red;"><?php echo form_error('radio'); ?></span>
			<input type="text" name="dob" id="dob" placeholder="Date of Birth(format dd-mm-yyyy)" value="<?php if(!empty($_POST['dob'])){echo $_POST['dob'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('dob'); ?></span>
			<input type="text" name="qualification" id="qualification" placeholder="What is your qualification" value="<?php if(!empty($_POST['qualification'])){echo $_POST['qualification'];}?>"/><br />
			<span style="color:red;"><?php echo form_error('qualification'); ?></span>
			<div style="width:80%; margin-left:34px; padding: 10px;">
			Are you: 
			 <label class="radio-inline" style="margin-left:15px;"><input type="radio" name="radio1" value="student" <?php if(!empty($_POST['radio1']))if($_POST['radio1']=='student') {echo 'selected';}?>>Student</label>
			<label class="radio-inline"><input type="radio" name="radio1" value="teacher" <?php if(!empty($_POST['radio1']))if($_POST['radio1']=='teacher') {echo 'selected';}?>>Teacher</label>
			</div>	
			<span style="color:red;"><?php echo form_error('radio1'); ?></span>
			<input type="submit" name="submit" value="Register" />
			
		</form>
	</div>
</body>
</html>