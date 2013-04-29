<?php 
	$emailSubject = 'Customer Has a Question!';
	$webMaster = 'you@yourdomain.com';
	$nameField = $_POST ['name'];
	$emailField = $_POST['email'];
	$questionField = $_POST ['question'];

	$body = <<<EOD
	<br><hr><br>
	Name: $name <br>
	Email: $email <br>
	Questions: $question <br>
	EOD;
	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";

	$success = mail($webMaster, $emailSubject, $body, $headers);

	$theResults = <<<EOD
EOD;

	echo "$theResults";

?>