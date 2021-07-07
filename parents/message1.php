<?php
	include "setting/config.php";
	// Create connection
	$conn = new mysqli($server, $username, $password, $dbname);
	$sql = "INSERT INTO Message (content, user_id, sender_id)
    VALUES (".$_POST['content'].",".$_POST['user_id'].",".$_POST['sender_id'].")";
	if ($conn->query($sql) === TRUE) {
    echo "message sent";
	} else {
    echo "Error " . $conn->error;
	}
	require('message.php');
	// closing connection
	$conn->close();

?>