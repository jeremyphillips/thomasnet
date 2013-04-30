
<form id="referral-form" action="form-action.php" method="get">
	<fieldset class="fs_signup">
		<div class="control-group">
			<label class="inline">Your name</label>
				<input type="text" name="y_name" id="y_name" placeholder="Your first name" required>
		</div>

		<div class="control-group">
			<label class="inline">Your email</label>	
				<input type="email" name="y_email" id="y_email" placeholder="your email address" required>
		</div>

				<input type="hidden" name="ref_nm" value="<?php echo $ref_nm; ?>">
				<input type="hidden" name="ref_em" value="<?php echo $ref_em; ?>">

	</fieldset>		

	<h3>Refer a friend</h3>	

	<fieldset class="fs_refer">	
			<label class="inline">Friend 1</label>
				<input type="text" name="f_name[1]" placeholder="Friend name">	
				<input type="email" name="f_email[1]" placeholder="Friend email address">
			

			<label class="inline">Friend 2</label>
				<input type="text" name="f_name[2]" placeholder="Friend name">
				<input type="email" name="f_email[2]" placeholder="Friend email address">
			

			<label class="inline">Friend 3</label>
				<input type="text" name="f_name[3]" placeholder="Friend name">
				<input type="email" name="f_email[3]" placeholder="Friend email address">
			
	</fieldset>		
		
			<button id="addFriend" class="btn">+ Add friend</button>

			<button type="submit" class="btn btn-primary">Submit</button>
</form>