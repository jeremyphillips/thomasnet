<?php 
$ref = $_GET['ref'];
include('inc/header.php');
//echo $ref; 
?>


	<section id="main">
				<form action="inc/form-action.php" method="get">
						<label class="inline">
							<input type="text" name="first-name" placeholder="first name">
							<input type="text" name="last-name" placeholder="last name">
							<input type="email" name="email" placeholder="email address">
							<input type="hidden" name="referrer" value="<?php echo $ref ;?>">
						</label>
					
						<button type="submit" class="btn btn-primary">Submit</button>
				</form>

	</section>

<?php 
include('inc/footer.php'); 
?>