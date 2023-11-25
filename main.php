<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $nbrTemp);
$inputs = explode(" ", fgets(STDIN));

$tempClosestToZero = $inputs[0];

if ($nbrTemp === 0) {
	$tempClosestToZero = 0;
}

for ($i = 0; $i < $nbrTemp; $i++)
{
    $tempValue = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
	
	if (abs($tempValue) < abs($tempClosestToZero)) {
		$tempClosestToZero = $tempValue;
	}
	
	if (abs($tempValue) === abs($tempClosestToZero)) {
		$tempClosestToZero = $tempValue > $tempClosestToZero ? $tempValue : $tempClosestToZero;
	}
	
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("$tempClosestToZero\n");
?>