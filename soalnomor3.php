<?php
$kata = array ('souvenir','loud','four','lost');
$x=4;
for($i=0;$i<=count($kata);$i++){
	if(strlen($kata[$i])== $x){
		echo $kata[$i]."<br/>";
	}
}
?>
