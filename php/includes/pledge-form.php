<?php
if (isset($_POST['submit'])) {
	$artist_name = isset($_POST['artist_name']) ? trim($_POST['artist_name']) : '';
	$artist_site = isset($_POST['artist_site']) ? trim($_POST['artist_site']) : '';
	$pledge_amount = isset($_POST['pledge_amount']) ? trim($_POST['pledge_amount']) : '';
	$nickname = isset($_POST['nickname']) ? trim($_POST['nickname']) : '';
	$email_address = isset($_POST['email_address']) ? trim($_POST['email_address']) : '';
	$confirm_email = isset($_POST['confirm_email']) ? trim($_POST['confirm_email']) : '';

	/* Do some validation tests and store error messages in variables to use in the form. */
	if (empty($artist_name)) {
		$artist_name_error = "Please fill in the artist's name.";
		include 'pledge-form-content.php';
		}
	elseif (empty($artist_site)) {
		$artist_site_error = "We need the artist's website, to confirm which artist you mean.";
		include 'pledge-form-content.php';
		}
	elseif (!ctype_digit($pledge_amount)) {
		$pledge_amount_error = "One round dollar number, please. No small change.";
		include 'pledge-form-content.php';
		}
	elseif (empty($nickname)) {
		$nickname_error = "Nickname, please. We need something to call you by.";
		include 'pledge-form-content.php';
		}
	elseif (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address)) {
		$email_address_error = "Your email address doesn't look right. Please try again.";
		include 'pledge-form-content.php';
		}
	elseif ($email_address != $confirm_email) {
		$confirm_email_error = "Oy, butterfingers, the email addresses you typed don't match.";
		include 'pledge-form-content.php';
		}
	else {	
		require_once ("config.php");
	
		$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

		/* Create the prepared statement */
		if ($stmt = $connection->prepare("INSERT INTO pledges (artist_name, artist_site, pledge_amount, nickname, email_address, confirm_email) VALUES (?, ?, ?, ?, ?, ?)")) {
			$stmt->bind_param('ssssss', $artist_name, $artist_site, $pledge_amount, $nickname, $email_address, $confirm_email);
			$stmt->execute();			
//			echo "Inserted {$artist_name}, {$artist_site}, {$pledge_amount}, {$nickname}, {$email_address} into database\n";
			$stmt->close(); 
		}
		else {
			printf("Prepared Statement Error: %s\n", $mysqli->error);
		}

		$connection->close();
	
		include 'notify-thankyou.php';
	}
}
else {
		include 'pledge-form-content.php';
		include 'notify-howitworks.php';
}
?>