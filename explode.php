<?php 
$a = "|av|b|cb|d|e|";

$len = strlen($a);

$needle = "|";
$j = 0;
$temp = "";
$finalArr = array();

for ($i=0; $i < $len; $i++) { 
	if($a[$i] !== $needle){ //if 
		$temp .= $a[$i];
	}
	
	if($a[$i] === $needle || ($i === $len-1 && $a[$i] != $needle)) {
		$finalArr[$j] = $temp;
		$temp = "";
		$j++;		
	}
	
}

print_r($finalArr);
echo "<br/>";
print_r(explode("|", $a));


?>