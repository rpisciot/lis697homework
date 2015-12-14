<?php



include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "
select d.name cheatedOn, d.characterID charID, b.name firstCheater, b.characterID char1ID, c.name secondCheater, c.characterID char2ID, start_date, end_date from affairs a inner join characters d on a.characterID = d.characterID inner join characters c on a.character2ID = c.characterID inner join characters b on a.character1ID = b.characterID    ";


$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<h4><table border=3 style=width:75%><tr> <th>Cheated On</th> <th> First Cheater</th><th>Second Cheater</th><th>Start Date</th><th>End Date</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
echo "<td>";
	echo "<a href=\"viewcharacter.php?characterID=".$row["charID"].'">'.$row["cheatedOn"].'</a></td>';
		echo "<td>";
	echo "<a href=\"viewcharacter.php?characterID=".$row["char1ID"].'">'.$row["firstCheater"].'</a></td>';
		echo "<td>";
	echo "<a href=\"viewcharacter.php?characterID=".$row["char2ID"].'">'.$row["secondCheater"].'</a></td>';
		echo "<td>";
	echo $row["start_date"]."</td>";
		echo "<td>";
	echo $row["end_date"]."</td>";		
	echo '</tr>';
}
	echo "</table></h4>";
	
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";


include_once 'includes/footer.php';
?>