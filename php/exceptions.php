<?php
function divide($num1,$num2){
	if($num2 == 0){
		throw new Exception("Invalid number");
	}
	echo $num1/$num2;
}
try{
	divide(10,0);

}catch(Exception $e){
	echo "something went wrong".$e->getmessage();
}


?>