<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#class").change(function(){
			var value = $('#class').val();
			$.ajax({
				type		: "POST",
				url			: "ajax_results",	
				data		: {
								class: value,
								},

				success: function(data) {
					$('#ajax-response').html(data);
					$('#samp').hide();
				}
			});
		});
	});
</script>


<!DOCTYPE html>
<html>
<head>
	<title>Marks</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/markscss.css">
</head>
<body>
	<?php include('header.php'); ?>
	<div id="container">
	<form name="marks" action="" method="POST">
	<h1> Enter the marks details</h1>
		<select name="class" id="class">
			<option value="">Choose Class</option>
			<option value="10">Class 10</option>
			<option value="11">Class 11</option>
			<option value="12">Class 12</option>
		</select><br/>

		<select name="Studentname" id="samp">
			<option value="">choose class</option>
			<!--<option value="name">Class 10</option>-->
		</select><br/>
		<div id="ajax-response" ></div>
		<input type="text" name="maths" placeholder="Enter Maths marks"/><br/>
		<input type="text" name="english" placeholder="Enter english marks"/><br/>
		<input type="text" name="computer" placeholder="Enter computer marks"/><br/>
		<input type="text" name="total" placeholder="Enter Total marks"/><br/>
		<input type="text" name="result" placeholder="Enter Result marks"/><br/>
		<input type="submit" name="submit" value="submit" />
	</form>
	</div>

</body>
</html>