<?php 
$W = 3; $TC = 0; $RS = 19;

function wrapperChocolate($RS,$W)//function for calculating extra choclates we get against extra wrapper
{
	if(is_numeric($RS) && is_numeric($W)){
	try{
		$WC = $TC = $RS;
		do {
			$EC = intval($WC/$W); //extra choc agaist wrapper
			$EW = intval($WC%$W);//extra wrapper
			$WC = $EC+$EW;//total remaining wrapper
			$TC = $TC + $EC; //total choc
		} while (($EC+$EW)>=$W);
		return $TC;
	}
	catch(Exception $e){
		return $e;
	}
   }
}

echo wrapperChocolate($RS,$W);
?>