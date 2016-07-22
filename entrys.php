<?php
require_once ('entrys.php');
$conn = mysqli_connect("localhost", "sis_db_adm", "Espas(8049).db.sis", "sis_db");
$sql = "SELECT * FROM guestbook";

$db_sis = mysqli_query($conn, $sql);
if (! $db_sis)
{
	die('Ungültige Abfrage:' . mysqli_error());
}

echo '<table border="1">';
while ($zeile = mysqli_fetch_array($db_sis, MYSQLI_ASSOC))
{
	echo "<tr>";
	echo "<td>". $zeile['Benutzername'] . "</td>";
	echo "<td>". $zeile['Email'] . "</td>";
    echo "<td>". $zeile['Nachricht'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_free_result( $db_sis );
?>