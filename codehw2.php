<html>
<body>
<?php
echo "<h2>Challenge: ISBN Validation</h2>";

// Defining each number in a 10-digit ISBN number. Can input any values and the code below with determin if it is valid.
$n1 = 1;
$n2 = 5;
$n3 = 6;
$n4 = 8;
$n5 = 8;
$n6 = 1;
$n7 = 1;
$n8 = 1;
$n9 = 1;
$n10 = "X";



//code to display the ISBN being checked for validation 
echo "Checking ISBN: <br>";
echo $n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10;
echo "<br/>";
//function for all the numbers define in previous ISBN
function isbnvalidation ($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10) 
{
//code to allow the end of the ISBN to be X which means the last number is 10
if ($n10 == "X")
{
   $isbn = ((10 * $n1) + (9 * $n2) + (8 * $n3) + (7 * $n4) + (6 * $n5) + (5 * $n6) + (4 * $n7) + (3 * $n8) + (2 * $n9) + (1 * 10)) ;
   
	$Result = ($isbn / 11);
	return $Result;}
	//the math that will be done to test ISBN validation if all number are between 1-9
	else{
   $isbn = ((10 * $n1) + (9 * $n2) + (8 * $n3) + (7 * $n4) + (6 * $n5) + (5 * $n6) + (4 * $n7) + (3 * $n8) + (2 * $n9) + (1 * $n10)) ;
	$Result = ($isbn / 11);
	return $Result;
	}
	}
	
$isbnTest = isbnvalidation ($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);

//if the equation does not generate a whole number, this code will print not valid
if (is_float($isbnTest))
{
  echo "The ISBN is NOT valid <br>";
}
//if equation results in a whole number it is valid
else
{
  echo "The ISBN is valid!";
}



echo "<h2>Coin Toss!</h2>";

//Coded to keep flipping the coin as log as it flips 1 time
$toss = 1;
echo "Flipping a coin 1 time!<br>";
while ($toss < 2) {
//code to generate the heads or tails by randomly selcting 0 or 1
$coin = mt_rand(0,1);
$toss ++;
if ($coin){
?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
}
else {
//if the coin is zero it is tails
$coin = 0;
?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
}
}

echo "<br/>";

$toss = 1;
echo "Flipping a coin 3 times!<br>";
while ($toss < 4) {
$coin = mt_rand(0,1);
$toss ++;
if ($coin){
?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
}
else {
$coin = 0;
?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
}
}

echo "<br/>";

$toss = 1;
echo "Flipping a coin 5 times!<br>";
while ($toss < 6) {
$coin = mt_rand(0,1);
$toss ++;
if ($coin){
?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
}
else {
$coin = 0;
?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
}
}

echo "<br/>";

$toss = 1;
echo "Flipping a coin 7 times!<br>";
while ($toss < 8) {
$coin = mt_rand(0,1);
$toss ++;
if ($coin){
?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
}
else {
$coin = 0;
?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
}
}

echo "<br/>";
$toss = 1;
echo "Flipping a coin 9 times!<br>";
while ($toss < 10) {
$coin = mt_rand(0,1);
$toss ++;
if ($coin){
?><img src="front.jpg" alt="Heads" style="width:50px;height:50px;"> <?php
}
else {
$coin = 0;
?><img src="back.jpg" alt="Tails" style="width:50px;height:50px;"> <?php
}
}



echo "<h2>Coin Toss: Pt. 2!</h2>";
//code that keeps flipping a coin until it generate two heads in a row
echo "Begin the coin flipping!<br>";
//starting with number of heads and flips at zero
$heads = 0;
$flips = 0;
//keep flipping the coin as long as the number of heads is less than 2
while ($heads < 2) {
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
echo "<br>Flipped two heads in {$flips} flips!";







?>
</body>
</html>
