<?php
$usertype="company";
if($usertype == "student") {
	echo "you are a student";

	$brandmanagerisapplied = "no";

	if($brandmanagerisapplied == "yes")
		echo "you have already applied";
	else
		echo "you have not applied";
}elseif($usertype == "company") {
	echo "you are a company";
}
	
else {
	echo "you are a guest user";
}

$computer="abc";
switch($computer){
	case "student":
	echo "you are a student";
	break;

	case "digital":
	echo "computer is digital";
	break;

	default:
	echo "you are guest";
	break;
}

?>