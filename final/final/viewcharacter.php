<?php


require_once 'includes/functions.php';
include_once 'includes/header.php';
require_once 'includes/login.php';


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_GET['characterID'])) {
	$id = sanitizeMySQL($conn, $_GET['characterID']);
	$query = "SELECT name, biography, image_path FROM characters WHERE characterID=".$id;
	$result = $conn->query($query);
	if (!$result) die ("Invalid character id.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No character found with id of $id<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
			echo '<h1>Character Information</h1>';
		if ($row["image_path"]) {
		echo "<img src=\"images/".$row["image_path"].'">';
		}
			echo '<h3>'.'<p>'.$row["name"].'</p>'.'</h3>';
		
		echo "<h4><table border=1 style=width:75%><tr><th>Biography</th></tr>";
		
		echo '<tr>';
			echo "<td>".$row["biography"]."</td";
			echo '</tr>';
			echo "</table></h4>";
			
					
		}
	}
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";
} else {
	echo "No character id passed";
}

include_once 'includes/footer.php';
?>