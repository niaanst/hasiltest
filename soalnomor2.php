<?php
$number = array (1,2,3,4);
$y= count($number);
$x = 4;
//untuk membuat nilai array : 1[0]
for( $i=0;$i<=$y;$i++) {
//apabila 4/1[0] tidak sama dengan 1
if($x/$number[$i] != 1){
	echo $number[$i]. "<br/>";//{
	//echo $number[$i]."array ke ".$i."<br/>";
	}
}
?>


