<!DOCTYPE html>
<html>
<body>
<table border=1>
<?php
echo "<h2>Book List!</h2>";

//setting each data point in the multi-dimensional array
$books = array(
    array("Title","Author","Number of Pages","Type","Price"),
	array("PHP and MySQL Web Development","Luke Welling",144,"Paperback",31.63), 
	array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett",135,"Paperback",41.23),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"Paperback",40.88),
	array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"Paperback",22.09),
	array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback",28.49),
	array("Programming PHP","Kevin Tatroe",26,"Paperback",28.96)
);

echo "<pre>";

//foreach statement with a table that displays every piece of info in the $books array

foreach($books as $row) {
  echo('<tr>');
  foreach($row as $info) {
    echo('<td>' . $info . '</td>');
  }
  echo('</tr>');
  
  }

//calling the individual prices in the array to add them together for total price 
echo "Total Price:".(($books[1][4])+($books[2][4])+($books[3][4])+($books[4][4])+($books[5][4])+($books[6][4]));

echo "</pre>";
?>
  </table>
</body>
</html>

<html>
<body>
<?php

echo "<h2>Coin Toss: Pt. 3!</h2>";


echo "Begin the coin flipping!<br>";

//variable that allows any number to be the number of heads desired
$numHeadsInARow=4;

flipCoin($numHeadsInARow);
//function that with code in between that will keep flipping the coin until $numHeadsInARow is met
function flipCoin($numHeadsInARow) {
 //starting with number of heads and flips at zero
 
$heads = 0;
$flips = 0;
//while number of heads in a row is less than the set $numHeadsInARow keep flipping
while ($heads < $numHeadsInARow) {
    //the quater will either be a 0 or 1 which similates heads and tails
    $quarter = mt_rand(0,1);
    
    $flips ++;
    if ($quarter){
        $heads ++;
       ?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
    }
    else {
                    $heads = 0;
        ?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
    }
}
echo "<br>Flipped $numHeadsInARow heads in {$flips} flips!";
}




?>
</body>
</html>
