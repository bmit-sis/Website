<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting */
$conn = mysqli_connect("localhost", "sis_db_adm", "Espas(8049).db.sis", "sis_db");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM guestbook";

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>