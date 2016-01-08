		<select name="Studentname">
		<?php foreach($result as $key){ ?>
			<option value="<?php echo $key->name;?>"><?php echo $key->name;?></option>
			<?php }?>
			<!--<option value="name">Class 10</option>-->
		</select><br/>