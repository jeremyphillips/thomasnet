<html>
<head>
<title>Sign Up results</title>
</head>
<body>
First Name: <?php echo $_GET["first-name"]; ?><br>
Last Name: <?php echo $_GET["last-name"]; ?><br>
Email: <?php echo $_GET["email"]; ?></br>
Referrer: <?php echo $_GET["referrer"]; ?><br>

<hr>

<?php if ( $_GET["ref-email-1"] ) {
	echo '<strong>Referral #1</strong><br>';
		echo 'Name: ' . $_GET["ref-name-1"] .'<br>';
		echo 'Email: ' . $_GET["ref-email-1"] .'<br>';
		echo 'Referred by: ' . $_GET["email"] .'<br>';	 
	} 
?>

<?php if ( $_GET["ref-email-2"] ) {
	echo '<strong>Referral #2</strong><br>';
		echo 'Name: ' . $_GET["ref-name-2"] .'<br>';
		echo 'Email: ' . $_GET["ref-email-2"] .'<br>';
		echo 'Referred by: ' . $_GET["email"] .'<br>';	 
	} 
?>

<?php if ( $_GET["ref-email-3"] ) {
	echo '<strong>Referral #3</strong><br>';
		echo 'Name: ' . $_GET["ref-name-3"] .'<br>';
		echo 'Email: ' . $_GET["ref-email-3"] .'<br>';
		echo 'Referred by: ' . $_GET["email"] .'<br>';	 
	} 
?>

<?php if ( $_GET["ref-email-4"] ) {
	echo '<strong>Referral #4</strong><br>';
		echo 'Name: ' . $_GET["ref-name-4"] .'<br>';
		echo 'Email: ' . $_GET["ref-email-4"] .'<br>';
		echo 'Referred by: ' . $_GET["email"] .'<br>';	 
	} 
?>
<p><a href="javascript:history.go(-1)">Back</a></p>
</body>
</html>