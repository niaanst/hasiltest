<?php
$number = array (10,2,3,4);
$y = count($number);
$max= max($number);
for($i=0;$i<=$y;$i++){
	 if ($max <= $number[$i]){
	 echo $number[$i];
	 }
} 
?> 
