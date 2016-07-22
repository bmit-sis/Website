<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Gästebuch </title>
	
	<link rel="shortcut icon" type="image/x-icon" href="bilder/favicon.ico">
	<link type="image/x-icon" href="bilder/favicon.ico">
	<script src="jquery-1.12.0.min.js"> </script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link href="style.css" type="text/css" rel="stylesheet" />

</head>
<body>

<div id="Kopfbereich">
<!--<p> Gästebuch </p> -->
<img src="bilder/write.jpg" />
</div>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header active">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="gaestebuch.html">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="entry.php">Einträge <span class="sr-only">(current)</span></a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
<div id="Schatten">
</div>

<div id="inhalt">
<h1> Gästebuch  </h1>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting */
$conn = mysqli_connect("localhost", "sis_db_adm", "Espas(8049).db.sis", "sis_db");

//check connection
if($conn === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$user_name = mysqli_real_escape_string($conn, $_POST['username']);
$email_address = mysqli_real_escape_string($conn, $_POST['email']);
$comment = mysqli_real_escape_string($conn, $_POST['entry']);

// attempt insert query execution
$sql = "INSERT INTO guestbook (Benutzername, Email, Nachricht) VALUES ('$user_name', '$email_address', '$comment')";
if (mysqli_query($conn, $sql)){
	echo "Dein Eintrag wurde veröffentlicht.";
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
//close connection
mysqli_close($conn);
?>

</div>

<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <a href="http://sis.bm-it.ch/ueber.html"><button type="button" class="btn btn-default">Über mich</button></a>
  </div>
</div>

</body>
</html>