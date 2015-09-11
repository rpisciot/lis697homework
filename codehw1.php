<?php
echo "<h2>Challenge: Correct Change</h2>";

echo "You are due 159 cents back in change total.<br>";


$dollars = (159%100);
$quarters = ($dollars%25);
$dimes = ($quarters%10);
$nickels = ($dimes%5);

$dollar = (int) (159/100);
$quarter = (int) ($dollars/25);
$dime = (int) ($quarters/10);
$nickel = (int) ($dimes/5);
$remainder = (int) ($nickels);

  
  echo "You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel nickel(s), and $remainder cent(s)";



?>

<?php

echo "<h2>Challenge: 99 Bottles of Beer</h2>";

echo "<br>";

for ($beer=4; $beer>=1; $beer--)



{
 echo   "$beer bottles of beer on the wall, $beer bottles of beer! <br> Take one down pass it around, ".($beer-1)." bottles of beer on the wall! <br>" ;
{


}
	echo "<br>";
}
?>