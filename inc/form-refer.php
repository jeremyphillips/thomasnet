	<div id="referMod" class="modal hidden">
		<div class="modal-inner">
			<span class="closeMod"></span>
			<h3>Refer a friend</h3>
				<form id="referral-form" action="form-action.php" method="get">
						<label class="inline">You
							<input type="text" name="y_name" id="y_name" placeholder="Your first name" required>
							<input type="email" name="y_email" id="y_email" placeholder="your email address" required>
						</label>	
						<br>
						<label class="inline">Friend 1
							<input type="text" name="f_name[1]" placeholder="Name">
							<input type="email" name="f_email[1]" placeholder="email address">
						</label>

						<label class="inline">Friend 2
							<input type="text" name="f_name[2]" placeholder="Name">
							<input type="email" name="f_email[2]" placeholder="email address">
						</label class="inline">

						<label class="inline">Friend 3
							<input type="text" name="f_name[3]" placeholder="Name">
							<input type="email" name="f_email[3]" placeholder="email address">
						</label>
					
						<button id="addFriend" class="btn">+ Add friend</button>

						<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>	
	</div>