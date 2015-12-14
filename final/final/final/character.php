<?php



include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT name, biography, characterID FROM characters ";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<h4><table border=3 style=width:75%><tr> <th>Name</th><th>Biography</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';

	echo "</td><td>";
	
	echo "<a href=\"viewcharacter.php?characterID=".$row["characterID"]."\">".$row["name"]."</a>";
	
	echo "</td><td>".$row["biography"]."</td>";		
	echo '</tr>';
}
	echo "</table></h4>";


include_once 'includes/footer.php';
?>