<?php

require_once ("config.php");

$connection = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

/* Get the total pledged */
$result = mysqli_query($connection,'SELECT SUM(pledge_amount) FROM pledges');
	if (FALSE === $result) die("Select sum failed: ".mysqli_error);
	$row = mysqli_fetch_row($result);
	$total_pledged = $row[0];
$connection->close();

?>

