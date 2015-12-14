<?php



include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "
select d.name firstCharacter, d.characterID char1ID, b.name secondCharacter, b.characterID char2ID, status, start_date, end_date from relationships a inner join characters d on a.character1ID = d.characterID inner join characters b on a.character2ID = b.characterID    ";


$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<h4><table border=3 style=width:75%><tr> <th>Character 1</th> <th> Character 2</th><th>Status</th><th>Start Date</th><th>End Date</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';

	
	echo "<td>";
	
		echo "<a href=\"viewcharacter.php?characterID=".$row["char1ID"].'">'.$row["firstCharacter"].'</a></td>';
		echo "<td>";
	echo "<a href=\"viewcharacter.php?characterID=".$row["char2ID"].'">'.$row["secondCharacter"].'</a>';
	
	echo "</td><td>".$row["status"]."</td><td>".$row["start_date"]."</td><td>";
	
	
	echo $row["end_date"]."</td>";		
	echo '</tr>';
}
	echo "</table></h4>";
	
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";


include_once 'includes/footer.php';
?>