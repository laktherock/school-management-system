<!DOCTYPE html>
<html>
<head>
	<title>Class 10</title>
	<style>
	#container{
		border: 4px solid black;
    margin: 68px 418px;
    width: 44%;
    padding: 10px 0px 10px 102px;
	}
	input[type=submit] {
    padding: 6px;
    width: 122px;
    margin-left: 171px;
    margin-top: 20px;
	}
	td {
    padding-right: 85px;
}
	</style>
</head>
<body>
	<?php include('header.php'); ?>
	<div id="container">
		<form name="class" action="" method="POST">
			
			<?php $t=1;  foreach ($values as $row){ ?>
			<table>
			<tr>
			<td><?php echo $row->name; ?></td>
			<div class="radio_align"><td>
			    <input type="radio" name="<?php echo $row->id; ?>_<?php echo $row->name; ?>" value="present" checked>Present
			    <input type="radio" name="<?php echo $row->id; ?>_<?php echo $row->name; ?>" value="absent">Absent<br />
			</td></div>
			</tr>
			</table>	
        		 	 

        		<?php  $t++;}	?> 
        	<input type="submit" name="submit" value="submit" />
			<!--<input type="radio" name="att" value="present">Present
			<input type="radio" name="att" value="absent">Absent<br />
			
			</table>-->
		</form>
	</div>
</body>
</html>
