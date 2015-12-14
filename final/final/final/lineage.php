<?php



include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "
select d.name Child,
b.name firstParent,
        c.name secondParent
from    lineage a
        inner join characters b
            on a.parent1ID = b.characterID
        inner join characters c
            on a.parent2ID = c.characterID
        inner join characters d
            on a.characterID = d.characterID  ";


$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

echo "<h4><table border=3 style=width:75%><tr> <th>Parent 1</th> <th> Parent 2</th><th>Child</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr>';

	echo "</td><td>".$row["firstParent"]."</td><td>".$row["secondParent"]."</td><td>".$row["Child"]."</td>";		
	echo '</tr>';
}
	echo "</table></h4>";


include_once 'includes/footer.php';
?>